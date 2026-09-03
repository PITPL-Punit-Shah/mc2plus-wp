<?php
/**
 * Template Name: Portfolio Page
 */

get_header();

$portfolio_page_id = get_queried_object_id();

$portfolio_default_ventures = [
    [
        'backer' => 'HPCL',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Constems AI Systems Pvt Ltd',
        'description' => 'Last year recorded Rs. 4 Cr revenue, expanding business in US and Philippines, ITC, P&G are major clients.',
        'url' => 'https://constems-ai.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Digas Pvt Limited',
        'description' => 'The product got certified by LERC, Bangalore.',
        'url' => 'https://digas.co.in/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Unesar Pvt Ltd',
        'description' => 'Vadodara-based clean-energy startup behind the Solar Stove, a disruptive solar cooking solution aimed at replacing LPG in Indian kitchens.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Simulanis Solutions Pvt Ltd',
        'description' => 'Series A3 funding raised from ONGC (Rs 2.0 Crore) in Dec’21.',
        'url' => 'https://www.simulanis.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Tranzmeo IT Solutions Pvt Ltd',
        'description' => 'The startup has been selected in the Shell E4 Cohort program and raised funding at a valuation 70 times that of the HPCL round.',
        'url' => 'https://tranzmeo.com',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'EcoOpus Agriventures Limited',
        'description' => 'The startup is currently focusing on baggase marketing and is expected to deliver an order amount of Rs 40 lakh to a sugar factory .',
        'url' => 'https://www.ecoopus.in/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Hybrid Super Tech Engg Pvt Limited',
        'description' => 'Executed pilot bitumen-handling trial projects at an HPCL bitumen storage facility.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Automotive Technology & Components',
        'name' => 'Tjycheejuno Speciality Tyres Pvt Ltd',
        'description' => 'The startup is in the process to get its Faridabad plant products certified from BIS and commencing commercial production.',
        'url' => 'https://www.tjtyres.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Red Room Technology Pvt Limited',
        'description' => 'In its Series A round, The Startup raised a funding of Rs 8 Crores from M/s Lets Venture in May’21 and Rs 9 Crores more in April 2022.',
        'url' => 'https://sanfe.in/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Clairviz Technology Systems Pvt Ltd',
        'description' => 'The startup is working/enhancing their Asset Tracker product which is RFID & Barcode based product.',
        'url' => 'https://clairviz.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'RMRS Electric Vehicles Pvt Limited',
        'description' => 'The Start-up wants to deploy 1000 e-rickshaws with swappable batteries in Delhi - NCR. 10 e-autos have been booked by HPCL LPG Dealers in Delhi NCR.',
        'url' => 'http://rryde.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Electric Mobility & EV',
        'name' => 'Magenta EV Solutions Pvt Ltd',
        'description' => 'Series A funding raised from NRI Dr Kiran Patel (Rs 90 Crore) in 2021.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Rosefield Energy Tech Pvt Ltd',
        'description' => 'The startup’s GPO model has gained good traction by connecting suppliers with customers in the business of Lubricant additives, raw material for additives, other chemicals and specialties, packaging...',
        'url' => 'http://rosefieldb2b.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'Aadyam Infotech Pvt Ltd',
        'description' => 'Deployed a smart delivery system app (for delivery of domestic LPG cylinders) for streamlining deliveries to end customers from the Distributors.',
        'url' => 'http://aadyaminfotech.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Voltrez Tech Pvt Ltd',
        'description' => 'The startup is developing an Ultra-safe Li-ion battery.',
        'url' => 'https://voltreztech.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Retail, E-Commerce & Consumer Tech',
        'name' => 'Chkfake Brand Protection Solutions Pvt
                                    Limited',
        'description' => 'Chkfake has developed an app to check if a product is counterfeit/pilfered.',
        'url' => 'https://chkfake.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Evlogia Eco Care Pvt Limited',
        'description' => 'The Startup has raised a fund of Rs 50 Lacs in June \'22 from Ramaiyah Capital.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Innoctive Technologies Pvt Ltd (CargoFL)',
        'description' => 'Last FY, the startup has been profitable with Rs 4.50 Cr revenue and Rs 12 lakhs net profit after tax.',
        'url' => 'https://innoctive.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'HPS Lab Designs Private Ltd',
        'description' => 'The Startup has raised Rs 7.5 Crores from M/s Refex in June\'22.',
        'url' => 'http://hpslabdesigns.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'ASN Fuels Pvt Ltd',
        'description' => 'The startup\'s technology is proven at a lab scale.',
        'url' => 'https://asnfuels.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Esmito Solutions Pvt. Ltd',
        'description' => 'Post validation stage, the startup has raised Rs 10 Cr from external investor and aggressively expanding to capture the Battery Swapping business in Bengaluru, Mumbai.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Electric Mobility & EV',
        'name' => 'Autogrid Mobility Pvt Ltd',
        'description' => 'Autogrid Mobility has also won TIDE 2.0 Grant of Rs. 35 lakhs from MEITY and Hackathon organized by MoRTH for designing barrier free toll collection system.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Retail, E-Commerce & Consumer Tech',
        'name' => 'Rodeo Digital',
        'description' => 'The startup has partnered with Equitas Bank to provide digital/e-commerce solutions to the current account holders of the bank such as grocery, hardware, and restaurant business categories.',
        'url' => 'https://rodeodigital.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Respirer Living Sciences Pvt Ltd',
        'description' => 'Bengaluru-based climate-tech startup building atmos, a scientifically validated air-quality and methane-monitoring sensor network deployed across 25+ Indian cities.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Kshumat Energy Pvt Ltd',
        'description' => 'Kshumat Energy has reached a capacity of manufacturing 20KLPD Biodiesel.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Petrobot Technologies Pvt Ltd',
        'description' => 'Jaipur-based robotics startup behind the ITIS Rover and MagRover, ATEX/PESO-certified robots for in-service, shutdown-free inspection of storage tanks and pipelines.',
        'url' => '',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Hanu AI Pvt Ltd',
        'description' => 'Delhi-based AI startup building RoadAthena, an AI- and GIS-based Road Asset Management System that has surveyed over 150,000 lane-kilometres of Indian roads.',
        'url' => 'https://hanuai.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Saltech Design Labs',
        'description' => 'Gujarat-based waste-to-value startup with patented recycling technology that turns single-use plastic and construction & demolition waste into sustainable building materials.',
        'url' => 'https://saltech.co.in/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'HPCL',
        'sector' => 'Aerospace & Defence',
        'name' => 'Maraal Aerospace',
        'description' => 'Noida-based, IIT Kanpur-incubated deep-tech startup building India\'s first indigenously designed solar-powered, long-endurance fixed-wing UAVs for defence and civil ISR missions.',
        'url' => 'https://maraalaerospace.com/',
        'tag' => 'Backed by HPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Aerospace & Defence',
        'name' => 'Detect Technologies Pvt. Ltd.',
        'description' => 'AI-based pipeline inspection, drones, refinery performance optimisation.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'Lynkit Solutions Pvt. Ltd.',
        'description' => 'Route optimizer & inventory optimizer for micro distributors.',
        'url' => 'https://www.lynkit.in',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'UptimeAI Tech Pvt. Ltd.',
        'description' => 'Improvements in energy efficiency and asset reliability for BPCL.',
        'url' => 'https://www.uptimeai.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'SiSoC Semiconductor Technologies Pvt. Ltd.',
        'description' => 'Smart LPG cylinder system – pay-as-you-use model.',
        'url' => 'https://www.sisocsemi.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'IROV Technologies Pvt. Ltd.',
        'description' => 'Battery-powered underwater drones for inspection.',
        'url' => 'https://www.eyerov.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Genrobotic Innovations Pvt. Ltd.',
        'description' => 'Development of robot for cleaning operations in manholes for BPCL.',
        'url' => 'https://www.genrobotics.org',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Aerostrovilos Energy Pvt. Ltd.',
        'description' => '100kW fuel-flexible gas turbine for off-grid power.',
        'url' => 'https://www.aerostrovilos.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Aerospace & Defence',
        'name' => 'Airpix Devices',
        'description' => 'Drone-based photographic data capture for oil industry assets.',
        'url' => 'https://www.airpix.in',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'CSR & Social Impact',
        'name' => 'Anthill Creations Foundation',
        'description' => 'Building inclusive, interactive playscapes with communities.',
        'url' => 'https://www.anthillcreations.org',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Breathe Applied Sciences Pvt. Ltd.',
        'description' => 'CO₂ to Methanol/Dimethyl Ether conversion technology.',
        'url' => 'https://www.breathesciences.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'CSR & Social Impact',
        'name' => 'Mantra Social Services Ltd.',
        'description' => 'Social venture working with 47 Government schools in 4 clusters; CSR initiative.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'MedTel Healthcare Pvt. Ltd.',
        'description' => 'Telemedicine solution providing healthcare at remote locations; CSR initiative.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'AgriTech',
        'name' => 'NAVA Design & Innovation Pvt. Ltd.',
        'description' => 'Automatic Neera harvesting device requiring minimal human intervention.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'Param People Infotech Solutions Pvt. Ltd.',
        'description' => 'Data-driven connected platform for highway wayside amenities.',
        'url' => 'https://www.highwaydelite.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Planys Technologies Pvt. Ltd.',
        'description' => 'Submersible robots for inspections (refineries, offshore, dams).',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Prantae Solutions Pvt. Ltd.',
        'description' => 'Affordable device enabling urine analysis on smartphone as self-health monitoring.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'AgriTech',
        'name' => 'Resnova Technologies Pvt. Ltd.',
        'description' => 'Custom built dairy management system for small dairy farms.',
        'url' => 'https://www.resnova.in',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Swadha Energies Pvt. Ltd. (ZedBee
                                    Technologies)',
        'description' => 'Development of motor drives for solar pumps saving electricity.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'CSR & Social Impact',
        'name' => 'Tatvagyan Thinkzone Pvt. Ltd.',
        'description' => 'Standardised primary education programmes – CSR.',
        'url' => 'https://www.thinkzone.in',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Waarey Solutions Pvt. Ltd.',
        'description' => 'Microbial solutions for waste water nitrification/denitrification.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Waferchips Techno Solutions Pvt. Ltd.',
        'description' => 'Wearable ECG device with AI algorithm transmitting heart signals to mobile phone.',
        'url' => 'https://www.waferchips.co.in',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'ZooFresh Foods Pvt. Ltd. (FreshR)',
        'description' => 'Tech-enabled fresh meat retail with rural distribution.',
        'url' => 'https://www.freshr.co.in',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Adit Bioscience Pvt. Ltd.',
        'description' => 'Affordable assisted reproductive technology for cattle.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'CyCa OncoSolutions Pvt. Ltd. (CyGenia)',
        'description' => 'Nano-drug delivery to reduce cancer drug side effects.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Lorven Biologics Pvt. Ltd.',
        'description' => 'Snakebite detection kit and novel anti-venom with herbal antioxidants.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Maximl Labs Pvt. Ltd.',
        'description' => 'Syncops platform providing real-time actionable data from field for BPCL operations.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Maiestas Technologies Pvt. Ltd.',
        'description' => 'Development of low-cost high-power LED lighting solutions.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Sastra Robotics India Pvt. Ltd.',
        'description' => 'Robotic system controlled by human brain/muscle signals.',
        'url' => 'https://www.sastrarobotics.com',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Retail, E-Commerce & Consumer Tech',
        'name' => 'Litmus World Marketing Technologies Pvt.
                                    Ltd.',
        'description' => 'Realtime customer feedback at BPCL fuel stations.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'BPCL',
        'sector' => 'Retail, E-Commerce & Consumer Tech',
        'name' => 'Sociograph Solutions Pvt. Ltd.',
        'description' => 'Creating BPCL Metaverse for customers to interact with BPCL UFill initiative.',
        'url' => '',
        'tag' => 'Backed by BPCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Rhomu Technologies Pvt Ltd, Chennai',
        'description' => 'Rhomu Technologies Pvt Ltd, Chennai is a IOCL portfolio startup working in Oil & Gas Operations.',
        'url' => 'https://ie.linkedin.com/company/rhomu-limited',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Proburgeon Pvt Ltd, Pune',
        'description' => 'Proburgeon Pvt Ltd, Pune is a IOCL portfolio startup working in Oil & Gas Operations.',
        'url' => '',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Cellark Powertech Pvt Ltd, Bhubaneswar',
        'description' => 'Cellark Powertech Pvt Ltd, Bhubaneswar is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://cellark.in/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'iSpock Technologies Pvt Ltd, Roorkee',
        'description' => 'iSpock Technologies Pvt Ltd, Roorkee is a IOCL portfolio startup working in Oil & Gas Operations.',
        'url' => 'https://www.linkedin.com/company/ispock',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Algo8 AI Pvt Ltd, Noida',
        'description' => 'Algo8 AI Pvt Ltd, Noida is a IOCL portfolio startup working in data analytics, ai & iot.',
        'url' => '',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Genrobotics Oil & Gas Pvt Ltd, Kerala',
        'description' => 'Genrobotics Oil & Gas Pvt Ltd, Kerala is a IOCL portfolio startup working in Oil & Gas Operations.',
        'url' => 'https://oilandgas.genrobotics.com/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Greengine Environmental Technologies Pvt
                                    Ltd, Kanpur',
        'description' => 'Greengine Environmental Technologies Pvt Ltd, Kanpur is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.greengine.co.in/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Urjahub (OPC) Pvt Ltd, Faridabad',
        'description' => 'Urjahub (OPC) Pvt Ltd, Faridabad is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.urjahub.com/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Edhaa Innovations Pvt Ltd, Maharastra',
        'description' => 'Edhaa Innovations Pvt Ltd, Maharastra is a IOCL portfolio startup working in healthcare & medtech.',
        'url' => 'https://www.edhaainnovations.com/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'World Impact Creation Pvt. Ltd., Cuttack',
        'description' => 'World Impact Creation Pvt. Ltd., Cuttack is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://in.linkedin.com/in/abhishek-mohapatra-86b01a370',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Aryo GreenTech, Uttar Pradesh',
        'description' => 'Aryo GreenTech, Uttar Pradesh is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://aryogreentech.com/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Bharat Flow Analytics Pvt. Ltd., Noida',
        'description' => 'Bharat Flow Analytics Pvt. Ltd., Noida is a IOCL portfolio startup working in Oil & Gas Operations.',
        'url' => 'https://www.bharatflow.in/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Virayaa Green Energy Systems Pvt Ltd.,
                                    Hyderabad',
        'description' => 'Virayaa Green Energy Systems Pvt Ltd., Hyderabad is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.vgesystems.in/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Perovskite Innovation Pvt Ltd., Roorkee',
        'description' => 'Perovskite Innovation Pvt Ltd., Roorkee is a IOCL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.perovskiteinnovation.com/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'IOCL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Bariflo Cybernetics Pvt Ltd, Bhubaneswar',
        'description' => 'Bariflo Cybernetics Pvt Ltd, Bhubaneswar is a IOCL portfolio startup working in environment, sustainability & waste management.',
        'url' => 'https://www.bc-pl.com/',
        'tag' => 'Backed by IOCL'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Planys Technologies Pvt. Ltd',
        'description' => 'Planys Technologies Pvt. Ltd is a ONGC portfolio startup working in industrial robotics & automation.',
        'url' => 'https://www.planystech.com',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'String Bio Private Limited',
        'description' => 'Bengaluru-based biomanufacturing company whose String Integrated Methane Platform (SIMP) converts methane into protein ingredients for animal nutrition, agriculture and other sectors.',
        'url' => 'https://www.stringbio.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Chakr Innovation Pvt Ltd',
        'description' => 'Bengaluru-based cleantech startup behind the Chakr Shield, India\'s first CPCB type-approved retrofit device that captures particulate emissions from diesel generators and turns them into ink.',
        'url' => 'https://chakr.in/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Aerospace & Defence',
        'name' => 'Sagar Defence Engineering Pvt Ltd',
        'description' => 'Mumbai-based defence-tech startup building unmanned marine surface vehicles, UAVs and autonomous control systems for the Indian Navy and maritime industry.',
        'url' => '',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Logic Ladder Technologies Pvt. Ltd',
        'description' => 'Gurugram-based climate-tech SaaS company behind The Sustainability Cloud, an enterprise platform for carbon accounting, ESG reporting and CBAM compliance.',
        'url' => 'https://www.thesustainabilitycloud.com/logicladder/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Sparkyo Technology Private Ltd',
        'description' => 'Bengaluru-based industrial IoT company (brand: Syook) providing a no-code Real-Time Location System for asset and worker tracking, trusted by ONGC, Unilever and Indian Railways.',
        'url' => 'https://www.syook.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Constems AI Systems Private Ltd',
        'description' => 'Constems AI Systems Private Ltd is a ONGC portfolio startup working in data analytics, ai & iot.',
        'url' => 'https://constems-ai.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Oil & Gas Operations',
        'name' => 'VDT pipeline Integrity services Pvt Ltd',
        'description' => 'VDT pipeline Integrity services Pvt Ltd is a ONGC portfolio startup working in Oil & Gas Operations.',
        'url' => 'https://www.linkedin.com/company/vdtintegritysolutions/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Oil & Gas Operations',
        'name' => 'CYRRUP Solutions Pvt. Ltd',
        'description' => 'Hyderabad-based fleet-tech startup behind Diesel Eye, a fully indigenous IoT device that detects and curbs diesel theft in commercial vehicle fleets.',
        'url' => 'https://www.cyrrup.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Pepfuels Technologies Pvt Ltd',
        'description' => 'Delhi-based on-demand fuel startup delivering diesel and petrol to industrial and commercial customers via an IoT-enabled mobile dispensing platform.',
        'url' => '',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Kshumat Energy Pvt Ltd',
        'description' => 'Kshumat Energy Pvt Ltd is a ONGC portfolio startup working in renewable & clean energy.',
        'url' => 'https://kshumatenergy.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Simulanis Solutions Private Limited',
        'description' => 'Deeptech Online safety and plant training modules.',
        'url' => 'https://www.simulanis.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Aavritti Technologies Pvt Ltd',
        'description' => 'Chennai-based, IIT Madras-incubated startup building ground-penetrating radar and robotic platforms (RUDI, MT100) to detect and map buried utilities and cables.',
        'url' => 'https://aavrtti.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'StrautX Technologies LLP',
        'description' => 'Fire-safety equipment startup manufacturing an unmanned robotic firefighting vehicle for hazardous industrial fire response.',
        'url' => 'https://strautx.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Blujay Robotics Private Limited',
        'description' => 'Oilfield equipment startup manufacturing downhole tools and equipment for well construction, completion and intervention.',
        'url' => 'https://www.blujayrobotics.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Oil & Gas Operations',
        'name' => 'WellRx Technologies Private Limited',
        'description' => 'Ahmedabad-based robotics startup whose PBot range of autonomous robots cleans solar PV panels without water, recovering lost energy output at large-scale solar plants.',
        'url' => '',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Photom Technologies Private Limited',
        'description' => 'Vadodara-based clean-fuel equipment manufacturer producing hydraulic booster compressors and dispensers for CNG, Bio-CNG, LNG and hydrogen refuelling infrastructure.',
        'url' => 'https://www.photomtechnologies.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Gascomp Fueltech (India) Pvt. Ltd',
        'description' => 'World-first eco-friendly, non-hazardous 1.5V battery made from an aloe vera-based herbal electrolyte, designed to replace toxic dry-cell battery chemicals.',
        'url' => 'https://www.gascomp.in/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Petrobot Technologies Pvt Ltd',
        'description' => 'Robotic inspection of tanks, pipelines and other industrial assets via the Jaipur-based startup\'s ITIS Rover and MagRover platforms.',
        'url' => 'https://petrobot.co.in/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Aloe Ecell Private Limited',
        'description' => 'Delhi-based deep-tech startup building wireless, ground-embedded charging pads that let EVs charge up to 30% faster simply by parking, without cables.',
        'url' => 'https://www.aloeecell.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Electric Mobility & EV',
        'name' => 'Dash Dynamic Pvt Ltd',
        'description' => 'Delhi-based climate-tech startup offering hybrid indoor air purification technology, including bi-polar ionization and air-flushing services for buildings.',
        'url' => '',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Vayuguard Climate Tech Pvt. Ltd.',
        'description' => 'Gujarat-based waste-to-value startup with patented recycling technology that turns single-use plastic and construction & demolition waste into sustainable building materials.',
        'url' => 'https://vayuguard.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Saltech',
        'description' => 'Gujarat-based waste-to-value startup with patented recycling technology that turns single-use plastic and construction & demolition waste into sustainable building materials.',
        'url' => 'https://saltech.co.in/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Angelbot AI Private Limited',
        'description' => 'New Delhi-based early-stage AI software startup (incorporated mid-2025); limited public information is available on its specific product line yet.',
        'url' => '',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Kairus Energies Private Limited',
        'description' => 'Pune-based battery startup manufacturing lithium-ion battery modules with a proprietary Hybrid Integrated Thermal Management System for defence, aerospace and renewable-energy applications.',
        'url' => 'https://www.kairusenergies.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Watthour Private Limited',
        'description' => 'Pune-based deep-tech startup, incubated at IIT Madras, developing indigenous sodium-ion and lithium-ion battery cells as a lower-cost alternative to conventional lithium chemistries.',
        'url' => 'https://watthour24.com/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'ONGC',
        'sector' => 'Electric Mobility & EV',
        'name' => 'Nikol Automotive Pvt Ltd',
        'description' => 'Pune-based charge point operator (NIKOL EV) building and manufacturing AC EV chargers, with a network of 3,000+ charging stations across India.',
        'url' => 'https://www.nikolev.in/',
        'tag' => 'Backed by ONGC'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'R D Grow Green India Water & Power
                                    Solutions Pvt. Ltd.',
        'description' => 'Effluent Treatment Plant through Electrolysis Means.',
        'url' => 'https://linkedin.com/company/grow-green-india-pvtltd',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Innotech Interventions Pvt. Ltd.',
        'description' => 'Development of a commercial Bioelectrochemical Prototype for treatment of Produced water concurrent producing of value added products.',
        'url' => 'https://innotechin.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Caliche Private Limited',
        'description' => 'Sand Reconsolidation by Injection of Anaerobes (SRIJAN).',
        'url' => 'https://calicheglobal.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Alvvin Engineering Pvt. Ltd.',
        'description' => 'Electricity Generation using Stirling Engine Technology and Flared Gas.',
        'url' => 'https://alvvin.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Beta Tank Robotic Pvt. Ltd.',
        'description' => 'Beta Tank Robotic Pvt. Ltd. is a OIL portfolio startup working in industrial robotics & automation.',
        'url' => 'https://betatankrobotics.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'DA"Spatio Rhobotique Laboratory Pvt.
                                    Ltd. (DSRL)',
        'description' => 'Design and development of a multipurpose wireless robot for oil well inspection and multifaceted oil and gas operation.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Rhomu Technologies Pvt. Ltd.',
        'description' => 'Rhomu Technologies Pvt. Ltd. is a OIL portfolio startup working in industrial robotics & automation.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Ettenyl Petrochemicals Pvt. Ltd. (EPPL)',
        'description' => 'Fuel Delivery Services using Mobile application implementing IOT Technology.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Ohm Clean Tech Private Limited D (OCTPL)',
        'description' => 'a) LOHC based Hydrogen Storage & transportation system for mobility applications b) Development of a 9 meter H2 Bus.',
        'url' => 'https://h2epower.net',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Minimines Cleantech Solutions Pvt. Ltd.',
        'description' => 'Minimines Cleantech Solutions Pvt. Ltd. is a OIL portfolio startup working in battery & energy storage.',
        'url' => 'https://m-mines.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'UNIVERSALLYGREEN TECHNOLOGY PRIVATE LIMITED',
        'description' => 'UNIVERSALLYGREEN TECHNOLOGY PRIVATE LIMITED is a OIL portfolio startup working in environment, sustainability & waste management.',
        'url' => 'https://ugreentechnology.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Hopun Innovations Pvt. Ltd.',
        'description' => 'Hopun Innovations Pvt. Ltd. is a OIL portfolio startup working in environment, sustainability & waste management.',
        'url' => 'https://linkedin.com/in/ripam-barooah-646182235',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Arovr Innovations Pvt. Ltd.',
        'description' => 'Augmented Reality Experience for Cultural Heritage Site and landmark.',
        'url' => 'https://ar-o-vr.in',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'Carbonation India Pvt. Ltd.',
        'description' => 'Solid Extract Utilization from the Desalination Plant.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Ambula Technologies Pvt. Ltd.',
        'description' => 'Ambula Technologies Pvt. Ltd. is a OIL portfolio startup working in healthcare & medtech.',
        'url' => 'https://ambula.app',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'GRYOGEN PVT. LTD.',
        'description' => '“Gryogen: Most Efficient Green Hydrogen Technology”.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'GREENOVATE SOLUTIONS PVT. LTD.',
        'description' => 'CO2 Capture Reactor.',
        'url' => 'https://greenovate.in',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'ROTOAI PVT. LTD.',
        'description' => 'RotoAI is developing an AI-driven predictive maintenance system that continuously monitors pump and motor performance etc., detects anomalies, and predicts failures in advance.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Electric Mobility & EV',
        'name' => 'MYEKIGAI PROFOUND PVT. LTD.',
        'description' => 'Charging Management System.',
        'url' => 'https://myekigai.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'AGNITECH FORGE PVT. LTD.',
        'description' => 'Joule GraS- Joule Heating for Specialised Graphene Synthesis from Undervalued Carbon.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'ECOVATIVE INNOVATIONS PVT. LTD',
        'description' => '‘Unbubble’ - Sustainable Packaging.',
        'url' => 'https://unbubble.in',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Aerospace & Defence',
        'name' => 'BRAVECORE PVT. LTD',
        'description' => 'Target Acquisition System and High Speed Drone, with handheld Ground Control Station (GCS), allows targets in visual range of up to 3 km to be identified and seamlessly converted into autonomous...',
        'url' => 'https://bravecore.in',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Aerospace & Defence',
        'name' => 'VIKASH GEOSENSING PVT. LTD',
        'description' => 'VIKASH GEOSENSING PVT. LTD. (Vikash Geosensing) is a OIL portfolio startup working in aerospace & defence.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'Aerospace & Defence',
        'name' => 'TRISHULOPULSION TECHNOLOGY PVT. LTD',
        'description' => 'Liquid Rocket Engine.',
        'url' => 'https://trishulspace.com',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'OIL',
        'sector' => 'AgriTech',
        'name' => 'IDASU LABS PVT. LTD',
        'description' => 'EarthTwin Management System.',
        'url' => '',
        'tag' => 'Backed by OIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'JV Foodworks Pvt. Ltd.',
        'description' => 'JV Foodworks Pvt. Ltd. is a GAIL portfolio startup working in healthcare & medtech.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Retail, E-Commerce & Consumer Tech',
        'name' => 'Bhagwandas Retail (Lal 10) Pvt. Ltd.',
        'description' => 'Bhagwandas Retail (Lal 10) Pvt. Ltd. is a GAIL portfolio startup working in retail, e-commerce & consumer tech.',
        'url' => 'https://www.lal10.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Persapien Innovations Pvt. Ltd.',
        'description' => 'Persapien Innovations Pvt. Ltd. is a GAIL portfolio startup working in healthcare & medtech.',
        'url' => 'https://www.linkedin.com/company/persapien/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Automotive Technology & Components',
        'name' => 'Tycheejuno Speciality Tyres Pvt. Ltd.',
        'description' => 'Tycheejuno Speciality Tyres Pvt. Ltd. is a GAIL portfolio startup working in automotive technology & components.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Tache Technologies Pvt. Ltd.',
        'description' => 'Delhi-based full-service market research company running an app-based platform for primary data collection, quantitative/qualitative survey research and analytics.',
        'url' => 'https://in.linkedin.com/company/tache-technologies',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Kshumat Energy Pvt. Ltd.',
        'description' => 'Kshumat Energy Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://kshumatenergy.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'R D Grow Green India Pvt. Ltd.',
        'description' => 'R D Grow Green India Pvt. Ltd. is a GAIL portfolio startup working in industrial robotics & automation.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Zunik Energies Pvt. Ltd.',
        'description' => 'IIT Roorkee-incubated startup manufacturing on-grid and off-grid solar inverters, UPS systems and variable frequency drives for renewable-energy applications.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Arcturus Business Solutions Pvt. Ltd.',
        'description' => 'Arcturus Business Solutions Pvt. Ltd. is a GAIL portfolio startup working in data analytics, ai & iot.',
        'url' => 'https://www.arcturusbusiness.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Prayogik Technologies Pvt. Ltd.',
        'description' => 'Prayogik Technologies Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://prayogik.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'Kriya Labs Pvt. Ltd.',
        'description' => 'Kriya Labs Pvt. Ltd. is a GAIL portfolio startup working in industrial robotics & automation.',
        'url' => 'https://www.eai.in/solutions/indea/da/st/920',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'Sarvodaya Infotech (Truck Suvidha)',
        'description' => 'Sarvodaya Infotech (Truck Suvidha) is a GAIL portfolio startup working in logistics & supply chain.',
        'url' => 'https://trucksuvidha.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Vasitars Pvt. Ltd.',
        'description' => 'Vasitars Pvt. Ltd. is a GAIL portfolio startup working in Oil & Gas Operations.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'VDT Pipeline Integrity Solutions Pvt. Ltd.',
        'description' => 'VDT Pipeline Integrity Solutions Pvt. Ltd. is a GAIL portfolio startup working in Oil & Gas Operations.',
        'url' => 'https://www.linkedin.com/company/vdtintegritysolutions/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Industrial Robotics & Automation',
        'name' => 'IROV Technologies Pvt. Ltd.',
        'description' => 'IROV Technologies Pvt. Ltd. is a GAIL portfolio startup working in industrial robotics & automation.',
        'url' => 'https://www.linkedin.com/company/eyerov/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'GEO Climate Risk Solutions Pvt. Ltd.',
        'description' => 'GEO Climate Risk Solutions Pvt. Ltd. is a GAIL portfolio startup working in environment, sustainability & waste management.',
        'url' => 'https://gcrs.co.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Aerospace & Defence',
        'name' => 'FeatherDyn Pvt. Ltd.',
        'description' => 'FeatherDyn Pvt. Ltd. is a GAIL portfolio startup working in aerospace & defence.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Orxa Energies Pvt. Ltd.',
        'description' => 'Orxa Energies Pvt. Ltd. is a GAIL portfolio startup working in battery & energy storage.',
        'url' => 'https://orxaenergies.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Electric Mobility & EV',
        'name' => 'Quanteon Powertrain Pvt. Ltd.',
        'description' => 'Quanteon Powertrain Pvt. Ltd. is a GAIL portfolio startup working in electric mobility & ev.',
        'url' => 'https://quanteonworld.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Electric Mobility & EV',
        'name' => 'Yali Mobility Pvt. Ltd.',
        'description' => 'Yali Mobility Pvt. Ltd. is a GAIL portfolio startup working in electric mobility & ev.',
        'url' => 'https://yalimobility.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Electric Mobility & EV',
        'name' => 'C-Electric Automotive Drive Pvt. Ltd.',
        'description' => 'C-Electric Automotive Drive Pvt. Ltd. is a GAIL portfolio startup working in electric mobility & ev.',
        'url' => 'https://www.c-electricdrives.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Pi Beam Labs Pvt. Ltd.',
        'description' => 'Pi Beam Labs Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.linkedin.com/company/pibeamlabs/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Cleanergy Tech Solutions Pvt. Ltd.',
        'description' => 'Cleanergy Tech Solutions Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://cleanergy.co.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Zonta Infratech Pvt. Ltd.',
        'description' => 'Zonta Infratech Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'CEID Consultants and Engineering Pvt. Ltd.',
        'description' => 'CEID Consultants and Engineering Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.ceidconsultants.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'LR Energy Vrindavan Pvt. Ltd.',
        'description' => 'LR Energy Vrindavan Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://lrenergy.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'Cargosite Ventures Pvt. Ltd.',
        'description' => 'Cargosite Ventures Pvt. Ltd. is a GAIL portfolio startup working in logistics & supply chain.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Data Analytics, AI & IoT',
        'name' => 'Xyma Analytics Pvt. Ltd.',
        'description' => 'Xyma Analytics Pvt. Ltd. is a GAIL portfolio startup working in data analytics, ai & iot.',
        'url' => 'https://www.linkedin.com/company/xyma-analytics/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Logistics & Supply Chain',
        'name' => 'Good Move Logistics and Transport Pvt. Ltd.',
        'description' => 'Good Move Logistics and Transport Pvt. Ltd. is a GAIL portfolio startup working in logistics & supply chain.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Ducere Technologies Pvt. Ltd.',
        'description' => 'Ducere Technologies Pvt. Ltd. is a GAIL portfolio startup working in healthcare & medtech.',
        'url' => 'https://ducere.io/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'FinTech',
        'name' => 'Upkram Technologies Pvt. Ltd.',
        'description' => 'Upkram Technologies Pvt. Ltd. is a GAIL portfolio startup working in fintech.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Oil & Gas Operations',
        'name' => 'Nawgati Tech Pvt. Ltd.',
        'description' => 'Nawgati Tech Pvt. Ltd. is a GAIL portfolio startup working in Oil & Gas Operations.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'FinTech',
        'name' => 'Intellicon Technologies Pvt. Ltd.',
        'description' => 'Intellicon Technologies Pvt. Ltd. is a GAIL portfolio startup working in fintech.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Aerospace & Defence',
        'name' => 'Dream Aerospace Technologies Pvt. Ltd.',
        'description' => 'Dream Aerospace Technologies Pvt. Ltd. is a GAIL portfolio startup working in aerospace & defence.',
        'url' => 'https://www.dreamaerospace.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Renewable & Clean Energy',
        'name' => 'Royal Bengal Greentech Pvt. Ltd.',
        'description' => 'Royal Bengal Greentech Pvt. Ltd. is a GAIL portfolio startup working in renewable & clean energy.',
        'url' => 'https://www.royalbengalgreentech.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Healthcare & MedTech',
        'name' => 'Manjha Technologies Pvt. Ltd.',
        'description' => 'Manjha Technologies Pvt. Ltd. is a GAIL portfolio startup working in healthcare & medtech.',
        'url' => '',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'FinTech',
        'name' => 'Eagle AI Pvt. Ltd.',
        'description' => 'Eagle AI Pvt. Ltd. is a GAIL portfolio startup working in fintech.',
        'url' => 'https://eagleaie.com/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Environment, Sustainability & Waste Management',
        'name' => 'REVY Environmental Solutions Pvt. Ltd.',
        'description' => 'REVY Environmental Solutions Pvt. Ltd. is a GAIL portfolio startup working in environment, sustainability & waste management.',
        'url' => 'https://www.revy.co.in/',
        'tag' => 'Backed by GAIL'
    ],
    [
        'backer' => 'GAIL',
        'sector' => 'Battery & Energy Storage',
        'name' => 'Indigenous Energy Storage Technologies Pvt.
                                    Ltd.',
        'description' => 'Indigenous Energy Storage Technologies Pvt. Ltd. is a GAIL portfolio startup working in battery & energy storage.',
        'url' => 'https://indienergy.in/',
        'tag' => 'Backed by GAIL'
    ]
];
?>

<section class="hero" data-astro-cid-hfwuo76p>
            <div class="orbit" aria-hidden="true" data-astro-cid-hfwuo76p><svg width="1920" height="1086"
                    viewBox="0 0 1920 1086" fill="none" class="curves" data-astro-cid-hfwuo76p="true">
                    <path
                        d="M337.580 1085.470 C270.910 735.060 421.580 364.270 743.490 166.360 C1159.670 -89.510 1704.481 40.450 1960.351 456.630"
                        stroke="#F37D2C" stroke-miterlimit="10" />
                    <path
                        d="M1920.500 319.710 C1746.860 319.710 1606.100 460.470 1606.100 634.110 C1606.100 807.750 1746.860 948.510 1920.500 948.510"
                        stroke="#F37D2C" stroke-miterlimit="10" />
                    <path
                        d="M79.65 -124.95C79.65 116.82 275.64 312.81 517.41 312.81C759.18 312.81 955.18 116.82 955.18 -124.95"
                        stroke="#F37D2C" stroke-miterlimit="10" />
                </svg><svg width="97" height="81" viewBox="0 0 97 81" fill="none" class="spark spark-a"
                    data-astro-cid-hfwuo76p="true">
                    <path
                        d="M10.98 80.46L43.13 53.96C48.08 49.88 53.7 46.68 59.73 44.49L96.16 31.32H77.13C71.27 31.32 68 24.55 71.65 19.96L87.53 0L54.31 24.71C48.03 29.38 40.85 32.68 33.22 34.41L0 41.92L21.67 45.64C26.6 46.49 29.08 52.09 26.39 56.31L10.97 80.46H10.98Z"
                        fill="#F37D2C" />
                </svg><svg width="64" height="52" viewBox="0 0 64 52" fill="none" class="spark spark-b"
                    data-astro-cid-hfwuo76p="true">
                    <path
                        d="M54.5701 51.24L44.0901 35C42.0301 31.81 43.5801 27.53 47.2001 26.39L63.26 21.35L38.05 20.35C34.76 20.22 31.6 19.03 29.04 16.96L8.08008 0L19.9601 16.35C22.0701 19.25 21.04 23.36 17.8 24.91L0 33.49L24.8501 31.01C29.1701 30.58 33.46 32 36.67 34.92L54.5601 51.23L54.5701 51.24Z"
                        fill="#F37D2C" />
                </svg></div>
            <div class="hero-inner reveal" data-astro-cid-hfwuo76p>
                <?php $hero_eyebrow = get_field('hero_eyebrow', $portfolio_page_id) ?: 'PORTFOLIO'; ?>
<p class="eyebrow" data-astro-cid-hfwuo76p><?php echo esc_html($hero_eyebrow); ?></p>
                <div class="underline" aria-hidden="true" data-astro-cid-hfwuo76p></div>
                <h1 data-astro-cid-hfwuo76p><span class="line reveal-line" data-astro-cid-hfwuo76p><span
                            class="reveal-line-box" data-astro-cid-hfwuo76p><span class="reveal-line-text"
                                data-astro-cid-hfwuo76p>The builders</span><svg width="138" height="146"
                                viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                                data-astro-cid-hfwuo76p="true">
                                <path
                                    d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                                    fill="#1E1E3C" />
                            </svg></span></span><span class="line reveal-line" data-astro-cid-hfwuo76p><span
                            class="reveal-line-box" data-astro-cid-hfwuo76p><span class="reveal-line-text"
                                data-astro-cid-hfwuo76p>we&rsquo;re <span class="accent"
                                    data-astro-cid-hfwuo76p>backing</span>.</span><svg width="138" height="146"
                                viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                                data-astro-cid-hfwuo76p="true">
                                <path
                                    d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                                    fill="#1E1E3C" />
                            </svg></span></span></h1>
                <p class="lede reveal-rise reveal-rise--after-2-lines" data-astro-cid-hfwuo76p><?php $hero_lede = get_field('hero_lede', $portfolio_page_id) ?: 'Our individual investors have been backing energy innovations for years. Now, we are all coming together to do it.'; ?>
<?php echo esc_html($hero_lede); ?></p>
                <div class="hero-bottom" data-astro-cid-hfwuo76p>
                    <div class="info-bar reveal-rise" data-astro-cid-hfwuo76p>
                        <div class="info-badge" aria-hidden="true" data-astro-cid-hfwuo76p>i</div>
                        <p class="info-text" data-astro-cid-hfwuo76p><?php $hero_info = get_field('hero_info_text', $portfolio_page_id) ?: 'Ventures backed across the energy majors. A selection of companies incubated through the energy majors’ programmes.'; ?>
<?php echo esc_html($hero_info); ?></p>
                    </div><button type="button" class="scroll" aria-label="Scroll to next section"
                        data-astro-cid-hfwuo76p><svg width="36" height="21" viewBox="0 0 36 21" fill="none"
                            aria-hidden="true" data-astro-cid-hfwuo76p="true">
                            <g id="Desktop" clip-path="url(#clip0_0_1)">
                                <g id="home test 1">
                                    <g id="Group">
                                        <path id="Vector"
                                            d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z"
                                            fill="#1E1E3C" />
                                    </g>
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_0_1">
                                    <rect width="1920" height="4496" fill="white"
                                        transform="translate(-942.22 -963.55)" />
                                </clipPath>
                            </defs>
                        </svg></button>
                </div>
            </div>
        </section>
        
<?php
$portfolio_page_id = get_queried_object_id();

$portfolio_default_backers = [
    ['All', 165],
    ['GAIL', 39],
    ['BPCL', 30],
    ['HPCL', 29],
    ['ONGC', 27],
    ['OIL', 25],
    ['IOCL', 15]
];
$portfolio_default_sectors = [
    ['All', 165],
    ['Renewable & Clean Energy', 33],
    ['Industrial Robotics & Automation', 26],
    ['Environment, Sustainability & Waste Management', 18],
    ['Oil & Gas Operations', 16],
    ['Healthcare & MedTech', 13],
    ['Battery & Energy Storage', 10],
    ['Data Analytics, AI & IoT', 9],
    ['Aerospace & Defence', 9],
    ['Electric Mobility & EV', 8],
    ['Logistics & Supply Chain', 7],
    ['Retail, E-Commerce & Consumer Tech', 5],
    ['CSR & Social Impact', 3],
    ['AgriTech', 3],
    ['FinTech', 3],
    ['Automotive Technology & Components', 2]
];

$portfolio_ventures = get_field('portfolio_ventures', $portfolio_page_id);
$portfolio_ventures = !empty($portfolio_ventures) ? $portfolio_ventures : $portfolio_default_ventures;

/*
 * ============================================================
 * DYNAMIC FILTER COUNTS
 * ============================================================
 * IMPORTANT:
 * - Backer/Sector ACF repeaters contain ONLY "value".
 * - There is NO ACF "count" field.
 * - Counts are calculated from the actual Portfolio Ventures.
 * - If the ACF venture repeater is empty, the original
 *   portfolio_default_ventures are used.
 */
$portfolio_backer_field = get_field('portfolio_backer_filters', $portfolio_page_id);
$portfolio_sector_field = get_field('portfolio_sector_filters', $portfolio_page_id);

$portfolio_backer_counts = array();
$portfolio_sector_counts = array();

foreach ((array) $portfolio_ventures as $venture) {

    $venture_backer = isset($venture['backer'])
        ? trim(wp_strip_all_tags((string) $venture['backer']))
        : '';

    $venture_sector = isset($venture['sector'])
        ? trim(wp_strip_all_tags((string) $venture['sector']))
        : '';

    $backer_key = strtolower($venture_backer);
    $sector_key = strtolower($venture_sector);

    if ($backer_key !== '') {
        $portfolio_backer_counts[$backer_key] =
            isset($portfolio_backer_counts[$backer_key])
                ? $portfolio_backer_counts[$backer_key] + 1
                : 1;
    }

    if ($sector_key !== '') {
        $portfolio_sector_counts[$sector_key] =
            isset($portfolio_sector_counts[$sector_key])
                ? $portfolio_sector_counts[$sector_key] + 1
                : 1;
    }
}

$portfolio_total = count($portfolio_ventures);

/*
 * Build Backer filters from ACF labels/order only.
 * Count is ALWAYS calculated above.
 */
$portfolio_backers = array();

if (!empty($portfolio_backer_field)) {

    foreach ($portfolio_backer_field as $filter) {

        $value = isset($filter['value'])
            ? trim((string) $filter['value'])
            : '';

        if ($value === '' || strtolower($value) === 'all') {
            continue;
        }

        $key = strtolower($value);

        $portfolio_backers[] = array(
            'value' => $value,
            'count' => isset($portfolio_backer_counts[$key])
                ? (int) $portfolio_backer_counts[$key]
                : 0,
        );
    }

} else {

    foreach ($portfolio_backer_counts as $value => $count) {
        $portfolio_backers[] = array(
            'value' => $value,
            'count' => (int) $count,
        );
    }
}

/*
 * "All" is NEVER stored in ACF count data.
 * It is calculated from the total venture rows.
 */
array_unshift(
    $portfolio_backers,
    array(
        'value' => 'All',
        'count' => $portfolio_total,
    )
);

/*
 * Build Sector filters from ACF labels/order only.
 * Count is ALWAYS calculated above.
 */
$portfolio_sectors = array();

if (!empty($portfolio_sector_field)) {

    foreach ($portfolio_sector_field as $filter) {

        $value = isset($filter['value'])
            ? trim((string) $filter['value'])
            : '';

        if ($value === '' || strtolower($value) === 'all') {
            continue;
        }

        $key = strtolower($value);

        $portfolio_sectors[] = array(
            'value' => $value,
            'count' => isset($portfolio_sector_counts[$key])
                ? (int) $portfolio_sector_counts[$key]
                : 0,
        );
    }

} else {

    foreach ($portfolio_sector_counts as $value => $count) {
        $portfolio_sectors[] = array(
            'value' => $value,
            'count' => (int) $count,
        );
    }
}

array_unshift(
    $portfolio_sectors,
    array(
        'value' => 'All',
        'count' => $portfolio_total,
    )
);
?>

<section class="explorer" aria-label="Venture explorer" data-astro-cid-lfsqn5tl>
    <div class="container" data-astro-cid-lfsqn5tl>
        <div class="filters" data-astro-cid-lfsqn5tl>
            <div class="filter-group" data-astro-cid-lfsqn5tl>
                <p class="filter-label" data-astro-cid-lfsqn5tl><?php echo esc_html(get_field('backer_filter_label', $portfolio_page_id) ?: 'BACKED BY'); ?></p>
                <div class="chip-row" role="group" aria-label="Filter by backer" data-astro-cid-lfsqn5tl>
                    <?php foreach ($portfolio_backers as $index => $backer) :
                        $value = $backer['value'] ?? '';
                        $count = isset($backer['count']) ? (int) $backer['count'] : 0;
                        if ($value === '') continue;
                    ?>
                        <button type="button" class="chip" data-filter="backer" data-value="<?php echo esc_attr($value); ?>" aria-pressed="<?php echo $index === 0 ? 'true' : 'false'; ?>" data-astro-cid-lfsqn5tl>
                            <?php echo esc_html($value); ?> <span class="count" data-astro-cid-lfsqn5tl><?php echo esc_html($count); ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="filter-group filter-group--sector" data-astro-cid-lfsqn5tl>
                <p class="filter-label" data-astro-cid-lfsqn5tl><?php echo esc_html(get_field('sector_filter_label', $portfolio_page_id) ?: 'SECTOR'); ?></p>
                <div class="chip-row" role="group" aria-label="Filter by sector" data-astro-cid-lfsqn5tl>
                    <?php foreach ($portfolio_sectors as $index => $sector) :
                        $value = $sector['value'] ?? '';
                        $count = isset($sector['count']) ? (int) $sector['count'] : 0;
                        if ($value === '') continue;
                    ?>
                        <button type="button" class="chip" data-filter="sector" data-value="<?php echo esc_attr($value); ?>" aria-pressed="<?php echo $index === 0 ? 'true' : 'false'; ?>" data-astro-cid-lfsqn5tl>
                            <?php echo esc_html($value); ?> <span class="count" data-astro-cid-lfsqn5tl><?php echo esc_html($count); ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
                <select class="sector-select" aria-label="Filter by sector" data-filter-select="sector" data-astro-cid-lfsqn5tl>
                    <?php foreach ($portfolio_sectors as $sector) :
                        $value = $sector['value'] ?? '';
                        $count = isset($sector['count']) ? (int) $sector['count'] : 0;
                        if ($value === '') continue;
                    ?>
                        <option value="<?php echo esc_attr($value); ?>" data-astro-cid-lfsqn5tl><?php echo esc_html($value); ?> (<?php echo esc_html($count); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <p class="results-count" aria-live="polite" data-astro-cid-lfsqn5tl>
            <?php echo esc_html(sprintf('Showing all %d ventures', $portfolio_total)); ?>
        </p>

        <div class="rows" data-astro-cid-lfsqn5tl>
            <?php foreach ($portfolio_ventures as $venture) :
                $backer = $venture['backer'] ?? '';
                $sector = $venture['sector'] ?? '';
                $name = $venture['name'] ?? '';
                $description = $venture['description'] ?? '';
                $url = $venture['url'] ?? '';
                $tag = $venture['tag'] ?? ('Backed by ' . $backer);
                if ($name === '') continue;
            ?>
                <article class="row" data-backer="<?php echo esc_attr($backer); ?>" data-sector="<?php echo esc_attr($sector); ?>" data-astro-cid-lfsqn5tl>
                    <div class="row-divider" aria-hidden="true" data-astro-cid-lfsqn5tl>
                        <span class="row-tag" data-astro-cid-lfsqn5tl>Backed by <?php echo esc_attr($backer); ?></span>
                        <svg width="61" height="61" viewBox="0 0 61 61" fill="none" class="row-spark" data-astro-cid-lfsqn5tl="true">
                            <path d="M15.5399 32.54L0 30.39L15.5399 28.24C22.1399 27.33 27.33 22.14 28.24 15.54L30.39 0L32.5399 15.54C33.4499 22.14 38.64 27.33 45.24 28.24L60.7799 30.39L45.24 32.54C38.64 33.45 33.4499 38.64 33.45 45.24L60.7799 30.39L45.24 32.54C38.64 33.45 33.4499 38.64 32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.1399 33.45 15.5399 32.54Z" fill="#F37D2C" />
                        </svg>
                    </div>
                    <div class="row-body" data-astro-cid-lfsqn5tl>
                        <div class="row-main" data-astro-cid-lfsqn5tl>
                            <h3 class="row-name" data-astro-cid-lfsqn5tl><?php echo esc_html($name); ?></h3>
                            <p class="row-sector" data-astro-cid-lfsqn5tl><span class="dot" aria-hidden="true" data-astro-cid-lfsqn5tl></span><?php echo esc_html($sector); ?></p>
                        </div>
                        <div class="row-side" data-astro-cid-lfsqn5tl>
                            <p class="row-desc" data-astro-cid-lfsqn5tl><?php echo esc_html($description); ?></p>
                            <?php if ($url) : ?>
                                <a href="<?php echo esc_url($url); ?>" class="row-link" target="_blank" rel="noopener" data-astro-cid-lfsqn5tl>Visit Page <span aria-hidden="true" data-astro-cid-lfsqn5tl>&rarr;</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="cta-duo" data-astro-cid-nu3pgtim>
            <div class="container" data-astro-cid-nu3pgtim>
                <div class="columns" data-astro-cid-nu3pgtim>
                    <div class="column reveal" data-astro-cid-nu3pgtim>
                        <h2 data-astro-cid-nu3pgtim><span class="reveal-line" data-astro-cid-nu3pgtim><span
                                    class="reveal-line-box" data-astro-cid-nu3pgtim><span class="reveal-line-text"
                                        data-astro-cid-nu3pgtim><?php echo esc_html(get_field('cta_left_title', $portfolio_page_id) ?: 'Building one of these?'); ?></span><svg width="138"
                                        height="146" viewBox="0 0 138 146" fill="none" class="reveal-star"
                                        aria-hidden="true" data-astro-cid-nu3pgtim="true">
                                        <path
                                            d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                                            fill="#1E1E3C" />
                                    </svg></span></span></h2>
                        <p class="reveal-rise reveal-rise--after-1-line" data-astro-cid-nu3pgtim><?php echo wp_kses_post(get_field('cta_left_description', $portfolio_page_id) ?: 'If your venture fits any of these sectors at TRL 4+, Cohort 1 is open. <br class="line-break" data-astro-cid-nu3pgtim>Bring the technology and a real industrial problem.'); ?></p><a
                            href="<?php echo esc_url(get_field('cta_left_url', $portfolio_page_id) ?: 'https://app.mc2plus.in/ext/form/23869/1/apply'); ?>" target="_blank"
                            rel="noopener noreferrer" data-astro-cid-b7tmfpbf="true" class="pill filled"><span
                                class="pill-label" data-astro-cid-b7tmfpbf><?php echo esc_html(get_field('cta_left_button', $portfolio_page_id) ?: 'Apply'); ?></span><span class="pill-arrow"
                                aria-hidden="true" data-astro-cid-b7tmfpbf><svg viewBox="0 0 44.9099 24.3499" fill="none"
                                    data-astro-cid-b7tmfpbf>
                                    <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor"
                                        data-astro-cid-b7tmfpbf></path>
                                    <path
                                        d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z"
                                        fill="currentColor" data-astro-cid-b7tmfpbf></path>
                                </svg></span></a>
                    </div>
                    <div class="divider" aria-hidden="true" data-astro-cid-nu3pgtim><svg width="61" height="61"
                            viewBox="0 0 61 61" fill="none" class="divider-spark" data-astro-cid-nu3pgtim="true">
                            <path
                                d="M15.5399 32.54L0 30.39L15.5399 28.24C22.1399 27.33 27.33 22.14 28.24 15.54L30.39 0L32.5399 15.54C33.4499 22.14 38.64 27.33 45.24 28.24L60.7799 30.39L45.24 32.54C38.64 33.45 33.4499 38.64 32.5399 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.1399 33.45 15.5399 32.54Z"
                                fill="#F37D2C" />
                        </svg></div>
                    <div class="column reveal" data-astro-cid-nu3pgtim>
                        <h2 data-astro-cid-nu3pgtim><span class="reveal-line" data-astro-cid-nu3pgtim><span
                                    class="reveal-line-box" data-astro-cid-nu3pgtim><span class="reveal-line-text"
                                        data-astro-cid-nu3pgtim><?php echo esc_html(get_field('cta_right_title', $portfolio_page_id) ?: 'Scouting for deal flow?'); ?></span><svg width="138"
                                        height="146" viewBox="0 0 138 146" fill="none" class="reveal-star"
                                        aria-hidden="true" data-astro-cid-nu3pgtim="true">
                                        <path
                                            d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                                            fill="#1E1E3C" />
                                    </svg></span></span></h2>
                        <p class="reveal-rise reveal-rise--after-1-line" data-astro-cid-nu3pgtim><?php echo esc_html(get_field('cta_right_description', $portfolio_page_id) ?: 'Corporates and investors can plug into a sourcing pipeline built on real industrial validation, co-invest or co-pilot with us.'); ?></p><a href="<?php echo esc_url(get_field('cta_right_url', $portfolio_page_id) ?: 'contact.html'); ?>" data-astro-cid-b7tmfpbf="true"
                            class="pill filled"><span class="pill-label" data-astro-cid-b7tmfpbf><?php echo esc_html(get_field('cta_right_button', $portfolio_page_id) ?: 'Partner with MC²+'); ?></span><span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf><svg viewBox="0 0 44.9099 24.3499" fill="none"
                                    data-astro-cid-b7tmfpbf>
                                    <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor"
                                        data-astro-cid-b7tmfpbf></path>
                                    <path
                                        d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z"
                                        fill="currentColor" data-astro-cid-b7tmfpbf></path>
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const explorer = document.querySelector('.explorer[data-astro-cid-lfsqn5tl]');
    if (!explorer) return;

    const rows = Array.from(explorer.querySelectorAll('.rows .row'));
    const backerChips = Array.from(explorer.querySelectorAll('[data-filter="backer"]'));
    const sectorChips = Array.from(explorer.querySelectorAll('[data-filter="sector"]'));
    const sectorSelect = explorer.querySelector('[data-filter-select="sector"]');
    const results = explorer.querySelector('.results-count');

    let activeBacker = 'All';
    let activeSector = 'All';

    function setPressed(items, value) {
        items.forEach(function (item) {
            item.setAttribute('aria-pressed', item.dataset.value === value ? 'true' : 'false');
        });
    }

    function applyFilters() {
        let visible = 0;

        rows.forEach(function (row) {
            const backerMatch = activeBacker === 'All' || row.dataset.backer === activeBacker;
            const sectorMatch = activeSector === 'All' || row.dataset.sector === activeSector;
            const show = backerMatch && sectorMatch;

            row.hidden = !show;
            if (show) visible++;
        });

        if (results) {
            results.textContent = visible === rows.length
                ? 'Showing all ' + visible + ' ventures'
                : 'Showing ' + visible + ' ventures';
        }
    }

    backerChips.forEach(function (chip) {
        chip.addEventListener('click', function () {
            activeBacker = chip.dataset.value || 'All';
            setPressed(backerChips, activeBacker);
            applyFilters();
        });
    });

    sectorChips.forEach(function (chip) {
        chip.addEventListener('click', function () {
            activeSector = chip.dataset.value || 'All';
            setPressed(sectorChips, activeSector);
            if (sectorSelect) sectorSelect.value = activeSector;
            applyFilters();
        });
    });

    if (sectorSelect) {
        sectorSelect.addEventListener('change', function () {
            activeSector = sectorSelect.value || 'All';
            setPressed(sectorChips, activeSector);
            applyFilters();
        });
    }

    applyFilters();
});
</script>

<?php get_footer(); ?>
<style>
    .explorer .row[hidden] {
        display: none !important;
    }
</style>