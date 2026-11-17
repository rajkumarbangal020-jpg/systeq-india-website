<?php
/**
 * SYSTEQ INDIA - Central Data Store & Configuration
 * Company: SYSTEQ Facility Management & Security Services (India) Private Limited
 * Location: Bengaluru, Karnataka, India
 */

// Company Information
$company = [
    'name' => 'SYSTEQ Facility Management & Security Services (India) Private Limited',
    'short_name' => 'SYSTEQ India',
    'tagline' => 'Building Better Spaces, Together',
    'badge' => 'Smart Facility Management',
    'legal_status' => 'PSARA Certified • ISO 9001:2015 Compliant',
    'phone' => '+91 7355275805',
    'phone_formatted' => '+91 73552 75805',
    'email' => 'sales@systeqindia.com',
    'alt_email' => 'systeqindia@gmail.com',
    'address_line1' => 'No. 1843, 2nd Floor, AECS Layout, A Block',
    'address_line2' => '60 Feet Road, Singasandra',
    'city' => 'Bengaluru',
    'state' => 'Karnataka',
    'pincode' => '560068',
    'country' => 'India',
    'full_address' => 'No. 1843, 2nd Floor, AECS Layout, A Block, 60 Feet Road, Singasandra, Bengaluru, Karnataka – 560068',
    'working_hours' => 'Monday – Friday: 9:00 AM – 9:00 PM',
    'emergency_support' => '24/7 Operations & Emergency Response',
    'website' => 'https://www.systeqindia.com/',
    'google_maps' => 'https://maps.google.com/?q=AECS+Layout+Singasandra+Bangalore'
];

// Highlight Statistics (Verified / Domain Metrics)
$statistics = [
    [
        'number' => 50,
        'suffix' => '+',
        'label' => 'Active Managed Properties',
        'subtext' => 'Across key tech corridors in Bengaluru',
        'icon' => 'fa-solid fa-city'
    ],
    [
        'number' => 500,
        'suffix' => '+',
        'label' => 'Trained & Verified Staff',
        'subtext' => 'PSARA security & certified technical crew',
        'icon' => 'fa-solid fa-users-gear'
    ],
    [
        'number' => 99,
        'suffix' => '.8%',
        'label' => 'Service Quality SLA',
        'subtext' => 'Preventive MEP uptime & response index',
        'icon' => 'fa-solid fa-shield-halved'
    ],
    [
        'number' => 24,
        'suffix' => '/7',
        'label' => 'Emergency Operations',
        'subtext' => 'Dedicated engineering escalation desk',
        'icon' => 'fa-solid fa-clock-rotate-left'
    ]
];

// Four Core Value Cards ("Why Choose SYSTEQ India?")
$why_choose = [
    [
        'title' => 'Professional & Trained Team',
        'description' => 'Background-verified, PSARA-certified security personnel and engineering-qualified technicians with continuous on-site skills drills.',
        'icon' => 'fa-solid fa-user-shield',
        'highlight' => '100% Police & Background Verified'
    ],
    [
        'title' => 'Advanced Technology',
        'description' => 'Transparent digital management logs, automated water tank sensors, QR-coded patrolling checkpoints, and proactive equipment monitoring.',
        'icon' => 'fa-solid fa-microchip',
        'highlight' => 'IoT & Digital Compliance'
    ],
    [
        'title' => 'Customized Solutions',
        'description' => 'Tailored SLAs matching the distinct requirements of residential high-rises, commercial tech campuses, and manufacturing units.',
        'icon' => 'fa-solid fa-sliders',
        'highlight' => 'Tailored SLA Matrices'
    ],
    [
        'title' => 'Cost-Effective Services',
        'description' => 'Zero hidden vendor markups and open-book financial accountability that optimizes maintenance costs by up to 22% over time.',
        'icon' => 'fa-solid fa-chart-line',
        'highlight' => 'Open-Book Financial Audit'
    ]
];

// 12 Company Services (Complete & In-Depth)
$services = [
    'housekeeping' => [
        'id' => 'housekeeping',
        'title' => 'Housekeeping & Facility Sanitization',
        'short_title' => 'Housekeeping',
        'category' => 'Soft Services',
        'icon' => 'fa-solid fa-broom',
        'image' => 'assets/images/about-inspection.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Mechanized, hospital-grade cleaning and disinfection for lobbies, common corridors, basements, and corporate work floors.',
        'description' => 'SYSTEQ India delivers mechanized, high-frequency housekeeping designed to maintain pristine, hygienic, and welcoming premises. Using certified eco-friendly chemicals and industrial single-disc floor scrubbers, high-pressure washers, and HEPA-grade vacuum equipment, our trained housekeeping staff ensures sparkling lobbies, odor-free basements, spotless glass facades, and spotless common amenities.',
        'benefits' => [
            'Eco-friendly, certified biodegradable cleaning consumables',
            'Mechanized ride-on and walk-behind floor scrubbing',
            'Structured 3-shift rotation with dedicated supervisor audits',
            'Washroom hygiene index monitoring with hourly logs'
        ],
        'features' => ['Common Area Upkeep', 'High-Pressure Basement Cleaning', 'Window & Facade Care', 'Clubhouse Sanitization']
    ],
    'gardening-landscaping' => [
        'id' => 'gardening-landscaping',
        'title' => 'Gardening & Landscaping',
        'short_title' => 'Gardening & Landscaping',
        'category' => 'Soft Services',
        'icon' => 'fa-solid fa-seedling',
        'image' => 'assets/images/gardening-service.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1558904541-efa8c4a08931?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Horticultural care, landscape preservation, lawn nourishment, pruning, and automated micro-irrigation stewardship.',
        'description' => 'Our professional horticulture team nurtures thriving green spaces that elevate aesthetic value and resident well-being. From ornamental lawn grooming, hedge sculpting, organic fertilizing, and seasonal flower beds to drip irrigation troubleshooting and tree health management, we bring botanical expertise to residential communities and commercial corporate parks.',
        'benefits' => [
            'Soil health analysis and organic composting integration',
            'Automated drip & sprinkler irrigation system maintenance',
            'Seasonal floral rotation and aesthetic hedge shaping',
            'Root disease prevention and non-toxic botanical pest remedies'
        ],
        'features' => ['Lawn Grooming & Aeration', 'Ornamental Tree Pruning', 'Organic Soil Enrichment', 'Irrigation Upkeep']
    ],
    'electrical-maintenance' => [
        'id' => 'electrical-maintenance',
        'title' => 'Electrical Maintenance & Substation Care',
        'short_title' => 'Electrical Maintenance',
        'category' => 'Technical & MEP',
        'icon' => 'fa-solid fa-bolt',
        'image' => 'assets/images/campus-facility.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Preventive maintenance of HT/LT substations, transformers, diesel generators (DG), APFC panels, and common distribution boards.',
        'description' => 'Certified wiremen and electrical supervisors conduct rigorous preventive inspections to eliminate power interruptions, mitigate short-circuit hazards, and optimize power factor penalties. We manage high-tension transformers, main switchboards, diesel generator synchronizing panels, and energy meters with thermographic logging and strict Lock-Out/Tag-Out (LOTO) safety protocols.',
        'benefits' => [
            '24/7 emergency electrical breakdown response',
            'APFC panel tuning to maintain unity power factor (>0.99)',
            'Diesel generator scheduled fuel, oil, and load testing',
            'Periodic thermographic imaging to detect loose contacts'
        ],
        'features' => ['Transformer Testing', 'DG Synchronization', 'Switchgear Overhaul', 'Phase Balance Balancing']
    ],
    'plumbing-maintenance' => [
        'id' => 'plumbing-maintenance',
        'title' => 'Plumbing Maintenance & Hydro-Pneumatic Systems',
        'short_title' => 'Plumbing Maintenance',
        'category' => 'Technical & MEP',
        'icon' => 'fa-solid fa-faucet-drip',
        'image' => 'assets/images/campus-facility.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1585704032915-c3400ca199e7?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Pressure booster pump upkeep, piping leak rectifications, overhead/underground water sump operations, and valve overhauls.',
        'description' => 'Water supply continuity is essential for every multi-story development. SYSTEQ India manages complex hydro-pneumatic pumping sets, variable frequency drives (VFDs), rainwater harvesting circuits, stormwater drains, and plumbing riser stacks. Our proactive plumbers conduct routine valve lubrication, pipeline descaling, and water audit tracking.',
        'benefits' => [
            'Continuous 24/7 pressurized water supply across all floors',
            'Rapid acoustic leak detection and swift pipe joint repair',
            'Automated water sump sensor calibration and overflow prevention',
            'Monsoon stormwater drain desilting and dewatering pump readiness'
        ],
        'features' => ['Hydro-Pneumatic Pumps', 'Sump Level Automation', 'Riser Stack Inspection', 'Storm Drain Clearing']
    ],
    'swimming-pool' => [
        'id' => 'swimming-pool',
        'title' => 'Swimming Pool Operation & Maintenance',
        'short_title' => 'Swimming Pool Care',
        'category' => 'Specialized Technical',
        'icon' => 'fa-solid fa-water-ladder',
        'image' => 'assets/images/campus-facility.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Comprehensive pool filtration, pH and chlorine chemical balancing, suction sweeping, and underwater lighting safety.',
        'description' => 'Maintaining crystal-clear, dermatologically safe swimming water requires scientific rigor. SYSTEQ India conducts daily multi-point water testing for pH, free chlorine, total alkalinity, and calcium hardness. We backwash sand filters, inspect recirculating balance tanks, vacuum algae sediments, and verify child-safety drain grills.',
        'benefits' => [
            'Daily laboratory-grade chemical titration and digital logbooks',
            'Suction sweeping and robotic surface skimmer operation',
            'Periodic sand replacement and multiport valve servicing',
            'Strict adherence to public health and bather hygiene codes'
        ],
        'features' => ['Chemical Balancing', 'Sand Filter Backwashing', 'Suction Sweeping', 'Safety Enclosure Audit']
    ],
    'security-services' => [
        'id' => 'security-services',
        'title' => 'PSARA-Certified Security Services',
        'short_title' => 'Security Services',
        'category' => 'Protection & Surveillance',
        'icon' => 'fa-solid fa-shield-cat',
        'image' => 'assets/images/about-inspection.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1582139329536-e7284fece509?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Disciplined, PSARA-licensed guarding personnel, digital visitor management, night patrolling, and emergency fire evacuation drills.',
        'description' => 'Security at SYSTEQ India combines trained human alertness with smart technology. Fully licensed under the Private Security Agencies Regulation Act (PSARA), our guards undergo rigorous physical training, fire evacuation drills, and customer courtesy instruction. We integrate visitor management systems (MyGate, ADDA), enforce parking discipline, and conduct RFID-tracked night patrols.',
        'benefits' => [
            '100% PSARA-certified and background-verified personnel',
            'Smart visitor, vendor, and delivery verification at all gates',
            'Regular mock fire drills, panic alarm tests, and perimeter checks',
            'Senior ex-defense / police supervisory vigilance rounds'
        ],
        'features' => ['Access Control Management', 'Perimeter Night Patrolling', 'CCTV Monitoring Assist', 'Emergency Drill Drills']
    ],
    'waste-management' => [
        'id' => 'waste-management',
        'title' => 'Waste Management & Composting',
        'short_title' => 'Waste Management',
        'category' => 'Environmental Services',
        'icon' => 'fa-solid fa-recycle',
        'image' => 'assets/images/gardening-service.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Door-to-door waste collection, source segregation, organic waste composting (OWC), and authorized recycler tie-ups.',
        'description' => 'We champion zero-waste-to-landfill practices across all our client properties. SYSTEQ India manages color-coded waste segregation (wet, dry, sanitary, and electronic), operates Organic Waste Converters (OWCs) to produce nutrient-rich garden compost on-site, and coordinates with authorized pollution control recyclers for dry recyclable disposal.',
        'benefits' => [
            'Full compliance with BBMP and State Pollution Control Board mandates',
            'Daily operation of organic composters, generating free landscape fertilizer',
            'Safe containment and certified disposal of hazardous and biomedical waste',
            'Community awareness workshops on source waste segregation'
        ],
        'features' => ['3-Way Segregation', 'OWC Composter Operation', 'Dry Recycler Handover', 'Garbage Chute Sanitization']
    ],
    'pest-control' => [
        'id' => 'pest-control',
        'title' => 'Integrated Pest Control & Fumigation',
        'short_title' => 'Pest Control',
        'category' => 'Environmental Services',
        'icon' => 'fa-solid fa-spray-can-sparkles',
        'image' => 'assets/images/about-inspection.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1628177142898-93e36e4e3a50?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Eco-safe rodent management, thermal fogging for mosquito control, cockroach gel treatment, and anti-termite remediation.',
        'description' => 'Uncontrolled pests pose severe health hazards and property damage risks. Our Integrated Pest Management (IPM) service utilizes government-approved, low-toxicity chemicals. We conduct systematic basement fogging for mosquito eradication, bait stations for rodent control, crack-and-crevice gel applications, and shaft disinfestation without disrupting daily living.',
        'benefits' => [
            'Odorless, WHO-certified chemicals safe for children and pets',
            'Seasonal thermal fogging around drain lines and manicured shrubbery',
            'Tamper-resistant rodent baiting boxes across basements and substations',
            'Scheduled preventative treatments with pre-notified resident circulars'
        ],
        'features' => ['Thermal Fogging', 'Rodent Bait Management', 'Gel Cockroach Control', 'Drainage Shaft Disinfection']
    ],
    'stp-wtp-ro' => [
        'id' => 'stp-wtp-ro',
        'title' => 'STP / WTP / RO Plant Operation & Maintenance',
        'short_title' => 'STP / WTP / RO Plants',
        'category' => 'Technical & MEP',
        'icon' => 'fa-solid fa-industry',
        'image' => 'assets/images/campus-facility.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Biological sewage treatment, membrane bioreactor (MBR) / SBR operations, water treatment testing, and reverse osmosis plants.',
        'description' => 'Operating water and wastewater treatment plants requires deep biochemical and electro-mechanical knowledge. SYSTEQ India deploys certified plant operators who monitor dissolved oxygen (DO), mixed liquor suspended solids (MLSS), and chlorine dosing. We service air blowers, filter presses, dosing pumps, and guarantee treated water parameters meeting KSPCB norms for toilet flushing and landscape reuse.',
        'benefits' => [
            '100% adherence to Karnataka State Pollution Control Board discharge norms',
            'Odorless, high-clarity treated water for gardening and dual-flush lines',
            'Preventative pump lubrication, media backwashing, and membrane cleaning',
            'Significant reduction in external tanker water procurement costs'
        ],
        'features' => ['KSPCB Compliance Testing', 'Sludge Dewatering Handling', 'Blower & Diffuser Overhauls', 'RO Membrane Descaling']
    ],
    'technical-mechanical' => [
        'id' => 'technical-mechanical',
        'title' => 'Technical & Mechanical MEP Services',
        'short_title' => 'Technical & Mechanical',
        'category' => 'Technical & MEP',
        'icon' => 'fa-solid fa-gears',
        'image' => 'assets/images/campus-facility.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Comprehensive HVAC chillers, ventilation fans, fire hydrant booster lines, lift coordination, and mechanical audits.',
        'description' => 'Our mechanical engineers ensure the smooth running of high-capacity building assets. We oversee centralized HVAC chillers, air handling units (AHUs), ventilation fans in basements, passenger and goods elevators AMC monitoring, diesel fire pumps, and wet riser hydrants. Continuous condition monitoring prevents catastrophic equipment breakdowns and extends asset lifespans.',
        'benefits' => [
            'Engineered preventive maintenance schedules (Daily, Weekly, Monthly, Annual)',
            'Fire hydrant pressure testing and diesel jockey pump auto-start checks',
            'Vendor AMC contract supervision (Elevators, Chillers, DGs, BMS)',
            'Detailed energy consumption audits and power savings recommendations'
        ],
        'features' => ['Fire Fighting Systems', 'HVAC Air Handling Units', 'Basement Jet Fan Ventilation', 'Elevator AMC Oversight']
    ],
    'staff-management' => [
        'id' => 'staff-management',
        'title' => 'Facility Staff & Helpdesk Management',
        'short_title' => 'Staff Management',
        'category' => 'Administrative Support',
        'icon' => 'fa-solid fa-users',
        'image' => 'assets/images/about-inspection.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Dedicated facility managers, assistant facility managers (AFMs), ticketing helpdesk executives, and payroll compliance.',
        'description' => 'Behind every smoothly functioning property is an organized management structure. SYSTEQ India provides experienced Facility Managers (FMs) and Assistant Facility Managers (AFMs) who act as the central point of contact for Management Committees, RWAs, and corporate facility directors. We operate structured ticketing helpdesks with SLA-bound resolution metrics and transparent attendance records.',
        'benefits' => [
            'On-site Facility Manager overseeing all soft and technical work streams',
            'Centralized computerized helpdesk tracking resident & employee tickets',
            '100% compliance with statutory labor laws (EPF, ESIC, Minimum Wages)',
            'Transparent monthly operational MIS reports with expenditure breakdowns'
        ],
        'features' => ['On-Site Facility Manager', 'Ticketing SLA Management', 'Statutory Wage Compliance', 'Vendor Invoice Audits']
    ],
    'builder-handover' => [
        'id' => 'builder-handover',
        'title' => 'Builder-to-Association Society Handover',
        'short_title' => 'Builder Handover',
        'category' => 'Specialized Engineering',
        'icon' => 'fa-solid fa-file-contract',
        'image' => 'assets/images/about-inspection.jpg',
        'fallback_unsplash' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Comprehensive civil & MEP snagging audits, asset register compilation, warranty verifications, and legal MoU assistance.',
        'description' => 'The transition of an apartment or commercial complex from the developer to the registered Resident Welfare Association (RWA) is fraught with technical risks and financial liabilities. Led by Managing Director Nitesh Chaubey (B.Tech Civil Engineering), SYSTEQ India conducts meticulous 140+ point snag audits covering structural health, STP capacities, transformer warranties, fire NOC compliance, and as-built architectural drawings.',
        'benefits' => [
            'Protects association funds from inheriting undisclosed developer defects',
            'In-depth electro-mechanical, civil, plumbing, and safety audit reports',
            'Complete asset register creation with warranty and AMC documentation',
            'Technical representation during tripartite negotiation meetings'
        ],
        'features' => ['140+ Point Snag Audit', 'Asset Registry Compilation', 'Legal MoU Assistance', 'Fire NOC & Sanction Review']
    ]
];

// Industries We Serve
$industries = [
    'residential' => [
        'id' => 'residential',
        'title' => 'Residential Communities & High-Rises',
        'badge' => 'Gated Living & RWAs',
        'icon' => 'fa-solid fa-building-user',
        'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=900&q=80',
        'summary' => 'Multi-tower luxury apartments, gated villa townships, and plotted developments across Bengaluru.',
        'description' => 'Residential communities require harmonious daily living, spotless clubhouses, reliable water supply, and tight security. We partner closely with Management Committees and Resident Welfare Associations (RWAs) to deliver complete peace of mind through structured communication, transparent accounting, and responsive on-site technical teams.',
        'key_points' => [
            '24/7 technical MEP maintenance (DG, STP, WTP, Hydro-Pneumatics)',
            'PSARA-certified security with app integration (MyGate / ADDA)',
            'Clubhouse, swimming pool, and landscape horticultural upkeep',
            'Open-book financial reconciliation and monthly MIS reporting'
        ],
        'clients_served' => 'Mana Candela, Mahaveer Orchids, SJR Palazza City, BrenWoods'
    ],
    'commercial' => [
        'id' => 'commercial',
        'title' => 'Commercial Complexes & Tech Parks',
        'badge' => 'Corporate & IT Parks',
        'icon' => 'fa-solid fa-building',
        'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80',
        'summary' => 'Corporate headquarters, multi-tenant tech campuses, and modern co-working hubs.',
        'description' => 'Commercial properties demand zero-downtime operations, impeccable executive hygiene, and stringent fire-life safety standards. SYSTEQ India provides facility management services designed to safeguard asset valuations, maintain optimal indoor air quality (IAQ), and create impressive visitor and employee experiences.',
        'key_points' => [
            'Central chiller and HVAC system preventative overhaul',
            'HT/LT substation maintenance and power quality management',
            'Executive floor sanitization and high-traffic washroom hygiene',
            'Access control, visitor turnstiles, and perimeter surveillance'
        ],
        'clients_served' => 'Tech Horizon Campus, Outer Ring Road Corporate Facilities'
    ],
    'industrial' => [
        'id' => 'industrial',
        'title' => 'Industrial Units & Logistics Hubs',
        'badge' => 'Manufacturing & Warehouses',
        'icon' => 'fa-solid fa-warehouse',
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=900&q=80',
        'summary' => 'Manufacturing plants, warehousing facilities, and distribution hubs along industrial corridors.',
        'description' => 'Industrial facilities operate under demanding environmental and regulatory conditions. From heavy warehouse floor scrubbing to high-pressure fire hydrant monitoring, hazardous waste segregation, and round-the-clock perimeter guarding, we guarantee occupational health, safety, and operational continuity.',
        'key_points' => [
            'Industrial scrubbing machines for heavy forklift track marks',
            'Hydrant ring main pressure tests and diesel fire pump readiness',
            'Perimeter boundary guarding, gate weighing, and truck dispatch logs',
            'Hazardous material containment and safety compliance'
        ],
        'clients_served' => 'AECS Logistics & Industrial Park, Singasandra / Hosur Road Hubs'
    ]
];

// Verified Projects & Clients (Official & Verified)
$projects = [
    [
        'title' => 'Mana Candela',
        'category' => 'residential',
        'category_name' => 'Residential IFMS',
        'location' => 'Sarjapur Road, Bengaluru',
        'status' => 'Active Contract • 2.5+ Years',
        'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=800&q=80',
        'description' => 'Comprehensive Integrated Facility Management (IFMS). Delivering 24/7 technical MEP operations, hydro-pneumatic pump rooms, mechanized lobby cleaning, and swimming pool maintenance with 99.8% MEP uptime.',
        'tags' => ['24/7 Technical MEP', 'Housekeeping', 'Swimming Pool AMC', 'STP Operations']
    ],
    [
        'title' => 'Mahaveer Orchids',
        'category' => 'residential',
        'category_name' => 'Gated Enclave',
        'location' => 'Bengaluru South, Karnataka',
        'status' => 'Active Contract',
        'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80',
        'description' => 'Transitioned smoothly with zero operational downtime to mechanized auto-scrubbing, PSARA-certified gate security, transformer maintenance, and landscape revival.',
        'tags' => ['PSARA Security', 'Landscape Care', 'DG Maintenance', 'Common Area Cleanliness']
    ],
    [
        'title' => 'SJR Palazza City',
        'category' => 'handover',
        'category_name' => 'Builder Handover & IFMS',
        'location' => 'Electronic City, Bengaluru',
        'status' => 'Handover Complete • Managed',
        'image' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=800&q=80',
        'description' => 'Conducted an exhaustive 140+ point builder snagging audit, verified as-built MEP schematics, rectified basement seepage snags, and facilitated successful RWA MoU registration.',
        'tags' => ['Builder Snag Audit', 'Asset Registry', 'Legal MoU Support', 'Full IFMS']
    ],
    [
        'title' => 'BrenWoods Apartments',
        'category' => 'residential',
        'category_name' => 'Residential Community',
        'location' => 'Electronic City Phase 2, Bengaluru',
        'status' => 'Active Operations',
        'image' => 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=800&q=80',
        'description' => 'Complete facility stewardship including storm drainage desilting, waste segregation with organic composting, night guard patrols, and automated tank level controls.',
        'tags' => ['Waste Management', 'Security Patrols', 'Plumbing Upkeep', 'OWC Composting']
    ],
    [
        'title' => 'Tech Horizon IT Campus',
        'category' => 'commercial',
        'category_name' => 'Corporate IT Park',
        'location' => 'Outer Ring Road, Bengaluru',
        'status' => 'Multi-Tenant Tech Park',
        'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80',
        'description' => 'Multi-tenant tech park facility management covering water-cooled centrifugal chillers, 100% DG backup synchronization, executive floor sanitization, and parking marshals.',
        'tags' => ['Central Chillers', 'HT Substation', 'Corporate Hygiene', 'Access Control']
    ],
    [
        'title' => 'AECS Industrial & Logistics Hub',
        'category' => 'industrial',
        'category_name' => 'Industrial Logistics',
        'location' => 'Singasandra / Hosur Road, Bengaluru',
        'status' => 'Active Industrial Contract',
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
        'description' => 'Industrial facility maintenance including heavy warehouse floor scrubbing, high-pressure fire hydrant line pressure tests, perimeter security, and hazardous waste containment.',
        'tags' => ['Heavy Scrubbing', 'Fire Hydrant AMC', 'Perimeter Guarding', 'Loading Bay Logistics']
    ]
];

// Verified Leadership Team
$leadership = [
    [
        'name' => 'Gyanti Chaubey',
        'role' => 'Founder & Chairperson',
        'qualification' => 'Governance & Strategic Vision',
        'quote' => '"Ideas are easy, implementation is hard and we have a team who takes tough calls to imply."',
        'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Guides the corporate governance, ethical compliance frameworks, client welfare ethos, and strategic expansion across Karnataka.'
    ],
    [
        'name' => 'Nitesh Kumar Chaubey',
        'role' => 'Managing Director (Operations)',
        'qualification' => 'B.Tech in Civil Engineering',
        'quote' => '"Engineering precision is the foundation of durable, safe, and cost-effective facility operations."',
        'image' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Spearheads technical MEP operations, builder-to-association handover audits, civil structural evaluations, and operational workforce deployment.'
    ],
    [
        'name' => 'Kamal Bhojak',
        'role' => 'Director (Finance, Legal & Planning)',
        'qualification' => '32+ Years Corporate & Regulatory Experience',
        'quote' => '"Financial transparency and statutory compliance are non-negotiable pillars of customer trust."',
        'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Brings over three decades of senior leadership overseeing complex regulatory frameworks, labor compliance (EPF, ESIC, PSARA), and open-book financial governance.'
    ],
    [
        'name' => 'Gopala K.',
        'role' => 'Technical Manager',
        'qualification' => '8+ Years Electro-Mechanical MEP',
        'quote' => '"Proactive maintenance prevents equipment failures before they can disrupt resident comfort."',
        'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Directs multi-site high-voltage substations, HVAC chillers, swimming pool chemistry, and automated water pumping networks.'
    ]
];

// Verified Testimonials (Genuine Feedback Highlights)
$testimonials = [
    [
        'client' => 'Resident Welfare Association',
        'property' => 'Mana Candela, Sarjapur Road',
        'quote' => 'Over the past 2.5 years, SYSTEQ India has demonstrated exceptional technical competence. Their MEP team resolved chronic pump issues that had plagued our society, and their open-book monthly audit gives our committee total peace of mind.',
        'rating' => 5,
        'author_role' => 'Secretary, Management Committee',
        'highlight' => '2.5+ Years Uninterrupted Partnership'
    ],
    [
        'client' => 'Apartment Owners Association',
        'property' => 'SJR Palazza City, Electronic City',
        'quote' => 'SYSTEQ India conducted our builder handover snag audit with forensic thoroughness. Mr. Nitesh Chaubey identified critical structural and MEP discrepancies that saved our association lakhs of rupees in future maintenance costs.',
        'rating' => 5,
        'author_role' => 'President, AOA',
        'highlight' => 'Builder Handover Snag Audit'
    ],
    [
        'client' => 'Estate Management Committee',
        'property' => 'Mahaveer Orchids, Bengaluru South',
        'quote' => 'The shift to SYSTEQ India has dramatically elevated the appearance of our common lobbies and gardens. Their PSARA-certified security team is disciplined, respectful, and vigilant around the clock.',
        'rating' => 5,
        'author_role' => 'Treasurer, RWA',
        'highlight' => 'Spotless Grounds & Disciplined Security'
    ]
];

// Section 08: Working Process (5-Step Modern Animated Timeline)
$working_process = [
    [
        'step' => '01',
        'title' => 'Site Inspection',
        'subtitle' => 'Comprehensive Asset Baseline Audit',
        'description' => 'Our civil and MEP engineers conduct forensic on-site audits of electrical switchboards, DG sets, hydro-pneumatics, STP capacity, and building integrity.',
        'icon' => 'fa-solid fa-magnifying-glass-location',
        'deliverable' => 'Detailed Asset Baseline Health Report'
    ],
    [
        'step' => '02',
        'title' => 'Customized Planning',
        'subtitle' => 'SLA & Preventative Matrix Formulation',
        'description' => 'We design tailored Service Level Agreements specifying technician-to-floor ratios, cleaning frequencies, machine deployment schedules, and preventive maintenance checklists.',
        'icon' => 'fa-solid fa-clipboard-list',
        'deliverable' => 'Transparent Monthly Operations Calendar'
    ],
    [
        'step' => '03',
        'title' => 'Team Deployment',
        'subtitle' => 'Verified Staff & Rigorous Orientation',
        'description' => 'Background-verified, PSARA-licensed guards and certified wiremen are deployed with high-grade machinery, standardized uniforms, and emergency safety protocols.',
        'icon' => 'fa-solid fa-user-shield',
        'deliverable' => '100% Police Verified & Screened Crew'
    ],
    [
        'step' => '04',
        'title' => 'Quality Monitoring',
        'subtitle' => 'Digital Logs & Supervisory Rounds',
        'description' => 'Hourly washroom QR audits, automated water tank telemetry, RFID night patrols, and weekly manager inspections ensure SLA conformance.',
        'icon' => 'fa-solid fa-chart-line-up',
        'deliverable' => 'Real-Time Operational Escalation Desk'
    ],
    [
        'step' => '05',
        'title' => 'Continuous Management',
        'subtitle' => 'Open-Book Governance & MIS Review',
        'description' => 'Monthly tripartite reviews with client management committees, sharing genuine statutory bank challans (EPF/ESIC), vendor receipts, and asset health updates.',
        'icon' => 'fa-solid fa-handshake-angle',
        'deliverable' => 'Zero Hidden Costs • Audited Peace of Mind'
    ]
];

// Section 09: Why Our Clients Trust Us (Trust Factors)
$trust_factors = [
    [
        'title' => '100% PSARA & Statutory Compliant',
        'description' => 'Fully licensed under the Private Security Agencies Regulation Act. Strict adherence to EPF, ESIC, professional tax, and minimum wage mandates.',
        'icon' => 'fa-solid fa-shield-check'
    ],
    [
        'title' => 'Open-Book Financial Governance',
        'description' => 'Complete transparency with zero vendor kickbacks. Monthly original statutory challans and consumable receipts shared directly with society committees.',
        'icon' => 'fa-solid fa-file-invoice-dollar'
    ],
    [
        'title' => 'Civil & MEP Engineering Leadership',
        'description' => 'Spearheaded by Managing Director Nitesh Kumar Chaubey (B.Tech Civil Engineering), delivering deep technical acumen rather than commercial guesswork.',
        'icon' => 'fa-solid fa-hard-hat'
    ],
    [
        'title' => '24/7 Dedicated Escalation Desk',
        'description' => 'Rapid response engineering flying squads in Bengaluru to resolve transformer trips, pipe bursts, and lift emergencies anytime day or night.',
        'icon' => 'fa-solid fa-clock-rotate-left'
    ]
];

// Why Our Approach Works (Methodology)
$methodology = [
    [
        'step' => '01',
        'title' => 'Comprehensive Site Audit',
        'description' => 'Our civil and MEP engineers inspect every asset—from electrical switchgear and sumps to basement joints—establishing a baseline health report.',
        'icon' => 'fa-solid fa-magnifying-glass-chart'
    ],
    [
        'step' => '02',
        'title' => 'Tailored SLA & Staff Matrix',
        'description' => 'We design a custom Service Level Agreement specifying staffing ratios, equipment checklists, and preventive maintenance frequencies.',
        'icon' => 'fa-solid fa-file-signature'
    ],
    [
        'step' => '03',
        'title' => 'Deployment & Continuous Training',
        'description' => 'Background-verified, PSARA-licensed guards and certified technicians are deployed with strict SOPs, uniforms, and digital toolkits.',
        'icon' => 'fa-solid fa-user-check'
    ],
    [
        'step' => '04',
        'title' => 'Open-Book Digital Governance',
        'description' => 'Monthly compliance challans, consumable invoices, and utility logs are shared openly with client committees for full transparency.',
        'icon' => 'fa-solid fa-receipt'
    ]
];

// Frequently Asked Questions (Official Content)
$faqs = [
    [
        'question' => 'What services does SYSTEQ India provide?',
        'answer' => 'SYSTEQ India provides complete Integrated Facility Management Services (IFMS) spanning Soft Services (Housekeeping, Gardening, Waste Management, Pest Control), Technical & MEP Services (Electrical, Plumbing, HVAC, STP/WTP/RO Plants, Swimming Pool Maintenance), PSARA-Certified Security Services, and specialized Builder-to-Association Handover audits.'
    ],
    [
        'question' => 'Is SYSTEQ India legally licensed and PSARA certified?',
        'answer' => 'Yes. SYSTEQ Facility Management & Security Services (India) Private Limited is fully licensed under the Private Security Agencies Regulation Act (PSARA) and strictly adheres to all statutory norms including EPF, ESIC, Professional Tax, and Minimum Wages. Proof of statutory deposits is shared with clients every month.'
    ],
    [
        'question' => 'What is your experience in builder-to-society handovers?',
        'answer' => 'Led by Managing Director Nitesh Kumar Chaubey (B.Tech in Civil Engineering), we specialize in comprehensive builder handover snag audits. We inspect over 140 points across civil structures, fire hydrant lines, STP design capacities, and electrical substations to ensure the Resident Welfare Association does not inherit unrectified builder liabilities.'
    ],
    [
        'question' => 'How does SYSTEQ India ensure billing and financial transparency?',
        'answer' => 'We follow an open-book policy. Clients receive genuine monthly supporting documents for all statutory challans (EPF/ESIC), vendor consumable invoices, and staff attendance logs. There are zero hidden markups or unauthorized vendor kickbacks.'
    ],
    [
        'question' => 'How do you handle after-hours facility emergencies?',
        'answer' => 'We maintain a 24/7 dedicated engineering escalation desk in Bengaluru. Our on-site technical teams are backed by mobile emergency technicians capable of responding rapidly to electrical trips, pump room failures, lift breakdowns, or plumbing bursts.'
    ],
    [
        'question' => 'Can we customize the facility management contract to our specific budget?',
        'answer' => 'Yes. We customize the scope of work and staffing models according to your community size and budget requirements—from partial technical MEP maintenance to full turnkey integrated facility management.'
    ]
];

// Helper Functions
function get_current_page() {
    $path = basename($_SERVER['PHP_SELF']);
    return str_replace('.php', '', $path);
}

function is_active($page_name, $current_page) {
    return ($page_name === $current_page) ? 'active' : '';
}
