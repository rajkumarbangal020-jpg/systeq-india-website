/**
 * SYSTEQ INDIA - WebGL 3D Scenes (Three.js)
 * 1. 3D Architectural Building & Green Campus Visualization (Hero)
 * 2. 3D Security Trust Shield (Section 09)
 * 3. Performance optimizations: requestAnimationFrame loop with IntersectionObserver pause
 */

(function () {
    'use strict';

    // Check if Three.js is loaded
    if (typeof THREE === 'undefined') {
        console.warn('Three.js library is not loaded. Skipping WebGL 3D scenes.');
        return;
    }

    // Check prefers-reduced-motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ==========================================================================
       1. HERO 3D ARCHITECTURAL VISUALIZATION (Removed as requested to keep video 100% clear)
       ========================================================================== */
    // Hero 3D wireframe building design removed to keep cinematic background video completely clean and unobstructed.

    /* ==========================================================================
       2. 3D SECURITY TRUST SHIELD (Section 09)
       ========================================================================== */
    const shieldContainer = document.getElementById('trustShieldCanvas');
    if (shieldContainer) {
        initShield3DScene(shieldContainer);
    }

    function initShield3DScene(container) {
        let width = container.clientWidth || 360;
        let height = container.clientHeight || 360;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(40, width / height, 0.1, 100);
        camera.position.set(0, 0, 6);

        const renderer = new THREE.WebGLRenderer({
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance'
        });
        renderer.setSize(width, height);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        // Lighting
        const ambLight = new THREE.AmbientLight(0xffffff, 0.9);
        scene.add(ambLight);

        const light1 = new THREE.PointLight(0x078BFF, 2, 50);
        light1.position.set(3, 4, 4);
        scene.add(light1);

        const light2 = new THREE.PointLight(0x00FFCC, 1.5, 50);
        light2.position.set(-3, -3, 3);
        scene.add(light2);

        // Shield Group
        const shieldGroup = new THREE.Group();
        scene.add(shieldGroup);

        // 3D Extruded Shield Shape
        const shieldShape = new THREE.Shape();
        shieldShape.moveTo(0, 1.8);
        shieldShape.quadraticCurveTo(1.6, 1.8, 1.8, 0.8);
        shieldShape.quadraticCurveTo(1.8, -0.6, 0, -2.0);
        shieldShape.quadraticCurveTo(-1.8, -0.6, -1.8, 0.8);
        shieldShape.quadraticCurveTo(-1.6, 1.8, 0, 1.8);

        const extrudeSettings = {
            depth: 0.35,
            bevelEnabled: true,
            bevelSegments: 4,
            steps: 2,
            bevelSize: 0.08,
            bevelThickness: 0.08
        };

        const shieldGeo = new THREE.ExtrudeGeometry(shieldShape, extrudeSettings);
        shieldGeo.center();

        const shieldMat = new THREE.MeshPhysicalMaterial({
            color: 0x082B59,
            metalness: 0.3,
            roughness: 0.2,
            transparent: true,
            opacity: 0.85,
            transmission: 0.4,
            clearcoat: 0.8,
            clearcoatRoughness: 0.1
        });

        const shieldMesh = new THREE.Mesh(shieldGeo, shieldMat);
        shieldGroup.add(shieldMesh);

        // Glowing Wireframe Outline
        const shieldEdges = new THREE.EdgesGeometry(shieldGeo);
        const shieldWireframe = new THREE.LineSegments(
            shieldEdges,
            new THREE.LineBasicMaterial({ color: 0x078BFF, linewidth: 2 })
        );
        shieldGroup.add(shieldWireframe);

        // Floating Rotating Gyro Ring around Shield
        const ringGeo = new THREE.TorusGeometry(2.4, 0.04, 16, 64);
        const ringMat = new THREE.MeshBasicMaterial({ color: 0x00FFCC, transparent: true, opacity: 0.65 });
        const ringMesh = new THREE.Mesh(ringGeo, ringMat);
        shieldGroup.add(ringMesh);

        // Inner Checkmark Symbol
        const checkShape = new THREE.Shape();
        checkShape.moveTo(-0.6, 0.1);
        checkShape.lineTo(-0.15, -0.45);
        checkShape.lineTo(0.7, 0.55);
        checkShape.lineTo(0.55, 0.7);
        checkShape.lineTo(-0.15, -0.15);
        checkShape.lineTo(-0.45, 0.25);
        checkShape.closePath();

        const checkGeo = new THREE.ExtrudeGeometry(checkShape, { depth: 0.15, bevelEnabled: false });
        checkGeo.center();
        const checkMat = new THREE.MeshStandardMaterial({
            color: 0x00FFCC,
            emissive: 0x00FFCC,
            emissiveIntensity: 0.5
        });
        const checkMesh = new THREE.Mesh(checkGeo, checkMat);
        checkMesh.position.z = 0.28;
        shieldGroup.add(checkMesh);

        // Resize handler
        window.addEventListener('resize', () => {
            if (!container) return;
            width = container.clientWidth;
            height = container.clientHeight;
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
        }, { passive: true });

        // Observer
        let isVisible = true;
        let frameId = null;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                isVisible = entry.isIntersecting;
                if (isVisible && !frameId) {
                    animateShield();
                } else if (!isVisible && frameId) {
                    cancelAnimationFrame(frameId);
                    frameId = null;
                }
            });
        }, { threshold: 0.1 });
        observer.observe(container);

        function animateShield() {
            if (!isVisible) return;
            frameId = requestAnimationFrame(animateShield);

            if (!prefersReducedMotion) {
                shieldGroup.rotation.y = Math.sin(Date.now() * 0.0015) * 0.28;
                shieldGroup.rotation.x = Math.cos(Date.now() * 0.0012) * 0.12;
                ringMesh.rotation.z += 0.01;
                ringMesh.rotation.x += 0.005;
            }

            renderer.render(scene, camera);
        }

        animateShield();
    }
})();
