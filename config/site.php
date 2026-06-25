<?php

declare(strict_types=1);

$site = [
    'name' => 'PACE NEXUS 2027',
    'short_name' => 'PACE NEXUS',
    'tagline' => 'International Conference on Next-Generation Technologies for Energy, Sustainability and Smart Systems - 2027',
    'dates' => '29 - 30 April 2027',
    'dates_detail' => '(Thursday & Friday)',
    'venue' => 'P. A. College of Engineering, Mangaluru, India',
    'location' => 'P. A. College of Engineering, Mangaluru, India - 574153, Karnataka, India.',
    'ieee_record' => 'XXXX',
    'email' => 'pacenexus2027@pace.edu.in',
    'phones' => [
        '+91 9986096513',
        '+91 8884975771',
    ],
    'base_path' => rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/'),
    'assets' => 'Assets',
];

$defaultPeopleImage = 'Assets/Images/default-people.png';

$welcomeMessage = [
    'title' => 'Welcome to PACE NEXUS 2027',
    'paragraphs' => [
        'PACE NEXUS 2027 is a premier international conference dedicated to advancing research and innovation in next-generation technologies, sustainable engineering, and intelligent systems. The conference aims to provide a dynamic platform for researchers, academicians, industry professionals, innovators, and students to exchange ideas, present cutting-edge research, and foster interdisciplinary collaborations.',
        'The conference emphasizes emerging technologies that address global challenges related to sustainability, clean energy, digital transformation, smart infrastructure, healthcare, and industrial innovation. Through keynote lectures, technical sessions, panel discussions, and networking opportunities, PACE NEXUS 2027 seeks to inspire transformative solutions for a sustainable and technologically advanced future.',
    ],
];

$aboutNexusTopics = [
    'Artificial Intelligence',
    'Computing',
    'Cyber Security',
    'Biotechnology',
    'Sustainable Infrastructure',
    'Advanced Communication Technologies',
    'Renewable Energy',
    'Smart Manufacturing',
];

$aboutCollege = [
    'title' => 'About PACE',
    'paragraphs' => [
        'P.A. College of Engineering (PACE) offers undergraduate programs in seven engineering disciplines, postgraduate programs in MBA, and Ph.D. programs in Engineering, Management, & Basic Sciences.',
        'The institution is accredited by the National Assessment and Accreditation Council with an A++ Grade. The Mechanical Engineering, Computer Science & Engineering, Electronics & Communication Engineering, and Biotechnology programs are accredited by the National Board of Accreditation. Committed to fostering research and innovation, PACE has established two incubation centres and secured research grants worth over 24 crores in recent years. The institute has a vibrant research culture, with several faculty members actively engaged in research, including scholars recognized among the top 2% most-cited researchers worldwide by Stanford University.',
    ],
];

$navLinks = [
    ['label' => 'Home', 'href' => 'index.php'],
    ['label' => 'CFP', 'href' => 'cfp.php'],
    ['label' => 'Committee', 'href' => 'committee.php'],
    ['label' => 'Speakers', 'href' => 'speakers.php'],
    ['label' => 'Submission', 'href' => 'submission.php'],
    ['label' => 'Registration', 'href' => 'registration.php'],
    ['label' => 'Contact', 'href' => 'contact.php'],
];

$importantDates = [
    ['label' => 'Paper Submission Deadline', 'date' => 'December 10, 2026'],
    ['label' => 'Acceptance Notification', 'date' => 'February 20, 2027'],
    ['label' => 'Registration Deadline', 'date' => 'March 20, 2027'],
    ['label' => 'CRC Submission Deadline', 'date' => 'March 20, 2027'],
    ['label' => 'Conference Dates', 'date' => 'April 29 - 30, 2027 (Thursday & Friday)'],
];

$organizingChairs = [
    ['name' => 'Dr. Shareefraju J. Ukkund', 'role' => 'Associate Professor, Dept. of BT'],
    ['name' => 'Dr. Asif Hassan', 'role' => 'Professor & Head, Dept. of ECE'],
];

$committeeSections = [
    [
        'title' => 'Chief Patron',
        'members' => [
            ['name' => 'Mr. Abdullah Ibrahim', 'role' => 'Managing Trustee, P. A. Educational Trust(R) Member, Governing Council, PACE.'],
        ],
    ],
    [
        'title' => 'Patrons',
        'members' => [
            ['name' => 'Mr. Zubair Ibrahim', 'role' => 'Trustee, P. A. Educational Trust(R) Member, Governing Council, PACE'],
            ['name' => 'Mr. Ameen Ibrahim', 'role' => 'Trustee, P. A. Educational Trust(R) Member, Governing Council, PACE'],
            ['name' => 'Dr. S. Vidyashankar', 'role' => 'Vice Chancellor, VTU'],
            ['name' => 'Dr. Prasad B Rampure', 'role' => 'Registrar, VTU'],
        ],
    ],
    [
        'title' => 'Advisory Committee',
        'members' => [
            ['name' => 'Prof. Joao Crespo', 'role' => 'Director of ITQB, NOVA University of Lisbon, Portugal'],
            ['name' => 'Mr. Shaheen Nasaruddin', 'role' => 'Director, Information Security, Santander USA'],
            ['name' => 'Dr. Jaby Mohammed', 'role' => 'Professor, Illinois State University, USA'],
            ['name' => 'Mr. Azim Siddique', 'role' => 'Global Solutions Architect, Amazon Web Services, Chicago Illinois USA'],
            ['name' => 'Dr. Syed Usman Taqui', 'role' => 'Dean of Biology and Environment Science & Engineering, KAUST, Saudi Arabia'],
            ['name' => 'Mr. Shiras Valappil', 'role' => 'Director, Kloske Ventures Pty Ltd | ABS Solutions Pty Ltd | India Advisory Committee, University of Newcastle, New Zealand'],
            ['name' => 'Mr. Omar Sinaph', 'role' => 'President - PVS Nolwood, Inc USA, Managing Director - PVS Chemicals Belgium'],
            ['name' => 'Dr. S. A. Khan', 'role' => 'Professor, IIUM, Kuala Lumpur, Malaysia'],
        ],
    ],
    [
        'title' => 'General Chair',
        'members' => [
            ['name' => 'Dr Ramis M. K.', 'role' => 'Principal, P. A. College of Engineering, Mangalore'],
        ],
    ],
    [
        'title' => 'Organizing Chairs',
        'members' => [
            ['name' => 'Dr. Asif Hassan', 'role' => 'Professor & Head, Dept. of ECE'],
            ['name' => 'Dr. Shareefraju J Ukkund', 'role' => 'Associate Professor, Dept. of BT'],
        ],
    ],
    [
        'title' => 'Organizing Secretary',
        'members' => [
            ['name' => 'Dr. Mohammed Zakir B.', 'role' => 'Associate Professor & Head, Dept. of AIML'],
        ],
    ],
    [
        'title' => 'Program Chairs',
        'members' => [
            ['name' => 'Dr. Sharmila Kumari', 'role' => 'Technical Program Committee Chair — Vice Principal, Professor & Head, Department of CSE, PACE, Mangalore'],
            ['name' => 'Krishna Prasad N.', 'role' => 'Registration Chair — Professor & Head, Dept. of BT'],
            ['name' => 'Dr Prashanth Pai', 'role' => 'Finance & Sponsorship Chair — Associate Professor & Head, Dept. of ME'],
            ['name' => 'Mr. Afsar Baig', 'role' => 'Publication Chair'],
            ['name' => 'Dr. Saleem Malik', 'role' => 'Publication Chair'],
            ['name' => 'Dr. Abdul Razak', 'role' => 'Publication Chair'],
            ['name' => 'Mrs. Shainy Mathew', 'role' => 'Publication Chair'],
            ['name' => 'Dr. Palakshappa', 'role' => 'Publicity Chair'],
            ['name' => 'Mr. Habeeb Ur Rehman P. B.', 'role' => 'Publicity Chair'],
            ['name' => 'Dr. Zoheb Ali', 'role' => 'Hospitality & Accommodation Committee'],
            ['name' => 'Mrs. Safa Sanah', 'role' => 'Hospitality & Accommodation Committee'],
            ['name' => 'Mrs. Laila Jaseela A.', 'role' => 'Hospitality & Accommodation Committee'],
        ],
    ],
];

$speakers = [
    ['name' => 'Chief Guest', 'role' => 'Details will be announced soon'],
    ['name' => 'Keynote Speaker', 'role' => 'Details will be announced soon'],
    ['name' => 'Keynote Speaker', 'role' => 'Details will be announced soon'],
    ['name' => 'Invited Expert', 'role' => 'Details will be announced soon'],
];

$cfpTracks = [
    [
        'title' => 'Emerging Computing Paradigms and Intelligent Systems',
        'icon' => 'chip',
        'topics' => [
            'Artificial Intelligence and Machine Learning',
            'Generative AI and Large Language Models',
            'Cyber Security and Information Assurance',
            'Blockchain and Distributed Ledger Technologies',
            'Data Science and Predictive Analytics',
            'Trustworthy and Secure Intelligent Systems',
        ],
    ],
    [
        'title' => 'Biotechnology, Healthcare and Environmental Sustainability',
        'icon' => 'bio',
        'topics' => [
            'Environmental Biotechnology',
            'Biomedical Engineering and Healthcare Technologies',
            'Bioinformatics and Computational Biology',
            'Waste Valorization and Circular Bioeconomy',
            'Sustainable Agriculture and Food Technologies',
            'Water Treatment and Environmental Remediation',
        ],
    ],
    [
        'title' => 'Advanced Computing and Digital Technologies',
        'icon' => 'cloud',
        'topics' => [
            'Cloud Computing',
            'High Performance Computing',
            'Software Engineering and Applications',
            'Data Science and Analytics',
            'Distributed and Parallel Computing',
            'Intelligent Information Systems',
        ],
    ],
    [
        'title' => 'Smart Infrastructure, Transportation and Sustainable Cities',
        'icon' => 'city',
        'topics' => [
            'Smart Cities and Urban Planning',
            'Green Buildings and Sustainable Construction',
            'Intelligent Transportation Systems',
            'Structural Health Monitoring',
            'Climate Resilient Infrastructure',
            'GIS, Remote Sensing and Urban Analytics',
        ],
    ],
    [
        'title' => 'Smart Electronics, Communication and IoT Technologies',
        'icon' => 'iot',
        'topics' => [
            'Internet of Things (IoT)',
            'Embedded Systems and VLSI Design',
            '5G/6G Communication Technologies',
            'Wireless Sensor Networks',
            'Edge and Fog Computing',
            'Smart Sensors and Intelligent Devices',
        ],
    ],
    [
        'title' => 'Sustainable Energy Systems, Manufacturing and Industrial Innovation',
        'icon' => 'energy',
        'topics' => [
            'Renewable Energy Technologies',
            'Smart Grids and Energy Management',
            'Additive Manufacturing and 3D Printing',
            'Industry 4.0 and Industry 5.0',
            'Robotics and Industrial Automation',
            'Advanced Materials and Functional Composites',
        ],
    ],
];

$registrationPolicies = [
    'Register in the appropriate category listed below.',
    'Student attendees must send a soft copy of their Institute ID Cards via email.',
    'At least one author of every accepted paper must pay registration fees and present the paper in person.',
    'Papers not presented at the conference will not be included in the final program and proceedings.',
];

$registrationFees = [
    ['type' => 'Regular Author (Industry)', 'indian' => 'INR 9,000', 'foreign' => 'USD 300'],
    ['type' => 'Regular Author (Academia)', 'indian' => 'INR 7,000', 'foreign' => 'USD 250'],
    ['type' => 'IEEE Author', 'indian' => 'INR 6,500', 'foreign' => 'USD 200'],
    ['type' => 'Student Author', 'indian' => 'INR 6,000', 'foreign' => 'USD 200'],
    ['type' => 'IEEE Student Author', 'indian' => 'INR 5,500', 'foreign' => 'USD 200'],
    ['type' => 'Regular Attendee', 'indian' => 'INR 2,000', 'foreign' => 'USD 150'],
    ['type' => 'Student Attendee', 'indian' => 'INR 1,500', 'foreign' => 'USD 100'],
];

$footerLinks = [
    ['label' => 'Get Directions', 'href' => 'https://maps.google.com/?q=P.+A.+College+of+Engineering+Mangaluru'],
    ['label' => 'Tourist Attractions', 'href' => 'https://www.karnatakatourism.org/destinations/mangaluru/'],
];

$footerSocial = [
    ['label' => 'Facebook', 'href' => 'https://www.facebook.com/pace.edu.in', 'icon' => 'facebook'],
    ['label' => 'Twitter', 'href' => 'https://twitter.com/pace_edu', 'icon' => 'twitter'],
    ['label' => 'Instagram', 'href' => 'https://www.instagram.com/pace.edu.in', 'icon' => 'instagram'],
    ['label' => 'YouTube', 'href' => 'https://www.youtube.com/@paceedu', 'icon' => 'youtube'],
];

$paceGroup = [
    'name' => 'PACE Group',
    'url' => 'https://www.paceeducation.com',
    'logo' => 'Assets/Images/pacegroup_logo.webp',
    'description' => 'PACE Group is an international educational organization that operates various institutions and schools across diverse fields, dedicated to providing quality education and empowering students for a successful future.',
];

function asset_url(string $path): string
{
    global $site;

    $base = $site['base_path'] === '' ? '' : $site['base_path'];
    $normalized = ltrim(str_replace('\\', '/', $path), '/');

    return $base . '/' . $normalized;
}

function page_url(string $path): string
{
    global $site;

    $base = $site['base_path'] === '' ? '' : $site['base_path'];
    $normalized = ltrim($path, '/');

    return $base . '/' . $normalized;
}

function is_current_page(string $path): bool
{
    $current = basename($_SERVER['PHP_SELF'] ?? '');

    return $current === $path;
}

function people_image_url(?string $image = null): string
{
    global $defaultPeopleImage;

    return asset_url($image ?? $defaultPeopleImage);
}
