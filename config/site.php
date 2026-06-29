<?php

declare(strict_types=1);

$site = [
    'name' => 'PACE IEEE NEXUS - 2027',
    'short_name' => 'PACE IEEE NEXUS',
    'year' => '2027',
    'ieee_cosponsor' => 'Technically Co-Sponsored by IEEE',
    'tagline' => 'International Conference on Next-Generation Technologies for Energy, Sustainability and Smart Systems - 2027',
    'dates' => '29 - 30 April 2027',
    'dates_detail' => '(Thursday & Friday)',
    'venue' => 'P. A. College of Engineering, Mangaluru, India',
    'location' => 'P. A. College of Engineering, Mangaluru, India - 574153, Karnataka, India.',
    'ieee_record' => 'XXXX',
    'email' => 'pacenexus2027@pace.edu.in',
    'base_path' => rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/'),
    'assets' => 'Assets',
];

$footerContacts = [
    [
        'name' => 'Dr. Asif Hassan',
        'role' => 'Professor & Head, Dept. of ECE',
        'phone' => '+91 8884975771',
    ],
    [
        'name' => 'Dr. Shareefraju J. Ukkund',
        'role' => 'Associate Professor, Dept. of BT',
        'phone' => '+91 9986096513',
    ],
];

$defaultPeopleImage = 'Assets/Images/default-people.png';

$welcomeMessage = [
    'title' => 'Welcome to PACE IEEE NEXUS - 2027',
    'paragraphs' => [
        'PACE IEEE NEXUS - 2027 is a premier international conference dedicated to advancing research and innovation in next-generation technologies, sustainable engineering, and intelligent systems. The conference aims to provide a dynamic platform for researchers, academicians, industry professionals, innovators, and students to exchange ideas, present cutting-edge research, and foster interdisciplinary collaborations.',
        'The conference emphasizes emerging technologies that address global challenges related to sustainability, clean energy, digital transformation, smart infrastructure, healthcare, and industrial innovation. Through keynote lectures, technical sessions, panel discussions, and networking opportunities, PACE IEEE NEXUS - 2027 seeks to inspire transformative solutions for a sustainable and technologically advanced future.',
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
        'The institution is accredited by the National Assessment and Accreditation Council with an A Grade. The Mechanical Engineering, Computer Science & Engineering, Electronics & Communication Engineering, and Biotechnology programs are accredited by the National Board of Accreditation. Committed to fostering research and innovation, PACE has established two incubation centres and secured research grants worth over 24 crores in recent years. The institute has a vibrant research culture, with several faculty members actively engaged in research, including scholars recognized among the top 2% most-cited researchers worldwide by Stanford University.',
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
    ['name' => 'Dr. Shareefraju J. Ukkund', 'role' => 'Associate Professor, Dept. of BT', 'image' => 'Assets/Images/People/shareefraju-ukkund.jpeg'],
    ['name' => 'Dr. Asif Hassan', 'role' => 'Professor & Head, Dept. of ECE', 'image' => 'Assets/Images/People/asif-hassan.jpg'],
];

$committeeSections = [
    [
        'title' => 'Chief Patron',
        'members' => [
            ['name' => 'Mr. Abdullah Ibrahim', 'role' => 'Managing Trustee, P. A. Educational Trust(R) Member, Governing Council, PACE.', 'image' => 'Assets/Images/People/abdullah-ibrahim.jpg'],
        ],
    ],
    [
        'title' => 'Patrons',
        'members' => [
            ['name' => 'Mr. Zubair Ibrahim', 'role' => 'Trustee, P. A. Educational Trust(R) Member, Governing Council, PACE', 'image' => 'Assets/Images/People/zubair-ibrahim.jpeg'],
            ['name' => 'Mr. Ameen Ibrahim', 'role' => 'Trustee, P. A. Educational Trust(R) Member, Governing Council, PACE', 'image' => 'Assets/Images/People/ameen-ibrahim.png'],
            ['name' => 'Dr. S. Vidyashankar', 'role' => 'Vice Chancellor, VTU', 'image' => 'Assets/Images/People/s-vidyashankar.jpg'],
            ['name' => 'Dr. Prasad B Rampure', 'role' => 'Registrar, VTU', 'image' => 'Assets/Images/People/prasad-b-rampure.jpg'],
        ],
    ],
    [
        'title' => 'Advisory Committee',
        'members' => [
            ['name' => 'Prof. Joao Crespo', 'role' => 'Director of ITQB, NOVA University of Lisbon, Portugal', 'image' => 'Assets/Images/People/joao-crespo.jpg'],
            ['name' => 'Mr. Shaheen Nasaruddin', 'role' => 'Director, Information Security, Santander USA', 'image' => 'Assets/Images/People/shaheen-nasaruddin.png'],
            ['name' => 'Dr. Jaby Mohammed', 'role' => 'Professor, Illinois State University, USA', 'image' => 'Assets/Images/People/jaby-mohammed.jpg'],
            ['name' => 'Mr. Azim Siddique', 'role' => 'Global Solutions Architect, Amazon Web Services, Chicago Illinois USA', 'image' => 'Assets/Images/People/azim-siddique.png'],
            ['name' => 'Dr. Syed Usman Taqui', 'role' => 'Dean of Biology and Environment Science & Engineering, KAUST, Saudi Arabia', 'image' => 'Assets/Images/People/syed-usman-taqui.png'],
            ['name' => 'Mr. Shiras Valappil', 'role' => 'Director, Kloske Ventures Pty Ltd | ABS Solutions Pty Ltd | India Advisory Committee, University of Newcastle, New Zealand'],
            ['name' => 'Mr. Omar Sinaph', 'role' => 'President - PVS Nolwood, Inc USA, Managing Director - PVS Chemicals Belgium', 'image' => 'Assets/Images/People/omar-sinaph.png'],
            ['name' => 'Dr. S. A. Khan', 'role' => 'Professor, IIUM, Kuala Lumpur, Malaysia', 'image' => 'Assets/Images/People/s-a-khan.png'],
        ],
    ],
    [
        'title' => 'General Chair',
        'members' => [
            ['name' => 'Dr Ramis M. K.', 'role' => 'Principal, P. A. College of Engineering, Mangalore', 'image' => 'Assets/Images/People/ramis-m-k.jpg'],
        ],
    ],
    [
        'title' => 'Organizing Chairs',
        'members' => [
            ['name' => 'Dr. Asif Hassan', 'role' => 'Professor & Head, Dept. of ECE', 'image' => 'Assets/Images/People/asif-hassan.jpg'],
            ['name' => 'Dr. Shareefraju J Ukkund', 'role' => 'Associate Professor, Dept. of BT', 'image' => 'Assets/Images/People/shareefraju-ukkund.jpeg'],
        ],
    ],
    [
        'title' => 'Organizing Secretary',
        'members' => [
            ['name' => 'Dr. Mohammed Zakir B.', 'role' => 'Associate Professor & Head, Dept. of AIML', 'image' => 'Assets/Images/People/mohammed-zakir.png'],
        ],
    ],
    [
        'title' => 'Program Chairs',
        'members' => [
            ['name' => 'Dr. Sharmila Kumari', 'role' => 'Technical Program Committee Chair — Vice Principal, Professor & Head, Department of CSE, PACE, Mangalore', 'image' => 'Assets/Images/People/sharmila-kumari.jpg'],
            ['name' => 'Krishna Prasad N.', 'role' => 'Registration Chair — Professor & Head, Dept. of BT', 'image' => 'Assets/Images/People/krishna-prasad.jpeg'],
            ['name' => 'Dr Prashanth Pai', 'role' => 'Finance & Sponsorship Chair — Associate Professor & Head, Dept. of ME', 'image' => 'Assets/Images/People/prashanth-pai.png'],
            ['name' => 'Dr. Palakshappa', 'role' => 'Publicity Chair', 'image' => 'Assets/Images/People/palakshappa.jpg'],
            ['name' => 'Mr. Afsar Baig', 'role' => 'Publication Chair', 'image' => 'Assets/Images/People/afsar-baig.png'],
            ['name' => 'Dr. Zoheb Ali', 'role' => 'Hospitality & Accommodation Committee', 'image' => 'Assets/Images/People/zoheb-ali.png'],
        ],
    ],
    [
        'title' => 'Technical Program Committee Chairs',
        'members' => [
            ['name' => 'Dr. Shamna N. V.', 'role' => 'Associate Professor & Head, Dept. of CSE-ICSB', 'image' => 'Assets/Images/People/shamna-n-v.jpg'],
            ['name' => 'Dr. Ronald Valder', 'role' => 'Associate Professor, Dept. of BT'],
            ['name' => 'Dr. Asia Hazareena', 'role' => 'Associate Professor, Dept. of ECE', 'image' => 'Assets/Images/People/asia-hazareena.png'],
            ['name' => 'Dr. Saleem Malik', 'role' => 'Associate Professor, Dept. of CSE', 'image' => 'Assets/Images/People/saleem-malik.png'],
            ['name' => 'Dr. Abdul Razak', 'role' => 'Professor, Dept. of ME', 'image' => 'Assets/Images/People/abdul-razak.png'],
            ['name' => 'Dr. Mohammed Hafeez M. K.', 'role' => 'Associate Professor, Dept. of CSE', 'image' => 'Assets/Images/People/mohammed-hafeez.png'],
        ],
    ],
];

$speakers = [
    ['name' => 'Dr. Syed Usman Taqui', 'role' => 'Division of Biological and Environmental Science and Engineering, King Abdullah University of Science and Technology, Saudi Arabia', 'image' => 'Assets/Images/People/usman.png'],
    ['name' => 'Mr. Khadeer Peer Shariff', 'role' => "Managing Director, Siraj Holdings International\nExecutive Chairman, Novac G.\nExecutive Director & CEO, Gibraltar Technologies Dubai", 'image' => 'Assets/Images/People/shariff.png'],
    ['name' => 'Mr. Brijesh Balakrishnan', 'role' => 'President, ITC Infotech', 'image' => 'Assets/Images/People/brijesh-balakrishnan.jpg'],
    ['name' => 'Dr. Mohammed Misbahuddin', 'role' => "Scientist 'F' & Head, Trust, C-DAC Bangalore", 'image' => 'Assets/Images/People/Misbahuddin.png'],
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

$visitorGuideLinks = [
    ['label' => 'Maps Location', 'href' => 'https://maps.app.goo.gl/m8vqSZYPK9NHu5iT6'],
    ['label' => 'Explore Mangalore', 'href' => 'https://www.karnatakatourism.org/destinations/mangaluru/'],
    ['label' => 'Where to Stay', 'href' => 'https://www.booking.com/city/in/mangalore.html'],
];

$siteCredit = [
    'label' => 'Website Designed & Developed by',
    'name' => 'Intelex Solutions',
    'logo' => 'Assets/Images/IntelexSolutions.png',
    'page' => 'intelex-solutions.php',
];

$intelexSolutions = [
    'name' => 'Intelex Solutions',
    'tagline' => 'Premium software development services in Mangalore.',
    'description' => 'Web development, mobile apps, AI integration, cloud solutions, and digital services for businesses worldwide.',
    'logo' => 'Assets/Images/IntelexSolutions.png',
    'website' => 'http://intelexsolutions.co.in/',
    'email' => 'info@intelexsolutions.in',
    'phones' => [
        // '+91 9972826383',
        '+91 6361557581',
        '+91 8867575821',
    ],
    'location' => 'Mangalore, Karnataka, India - 575001',
];

function asset_url(string $path): string
{
    global $site;

    $base = $site['base_path'] === '' ? '' : $site['base_path'];
    $normalized = ltrim(str_replace('\\', '/', $path), '/');

    return $base . '/' . $normalized;
}

function pace_carousel_images(): array
{
    $dir = __DIR__ . '/../Assets/Images/PACE';

    if (!is_dir($dir)) {
        return [];
    }

    $images = [];

    foreach (scandir($dir) as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        if (preg_match('/\.(?:png|jpe?g|webp|gif)$/i', $file)) {
            $images[] = 'Assets/Images/PACE/' . $file;
        }
    }

    sort($images, SORT_NATURAL | SORT_FLAG_CASE);

    return $images;
}

$paceCarouselImages = pace_carousel_images();

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
