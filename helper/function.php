<?php

function getBaseUrl() {
    // Determine the protocol (http or https)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

    // Get the host name (e.g., www.example.com or localhost)
    $host = $_SERVER['HTTP_HOST'];

    // Get the directory path of the script, removing the script name itself
    $script_name = $_SERVER['SCRIPT_NAME'];
    $path = str_replace(basename($script_name), "", $script_name);

    // Construct the base URL
    $base_url = $protocol . "://" . $host . $path;

    return $base_url;
}

function callNumber(){
    return "+91 82000 17181";
}

function contactEmail(){
    return "contact@shreegurvetech.com";
}

function officeAddress(){
    return "103, Hany Arcade, Dabholi Village, Katargam, Surat - 395004, India";
}

function representativeOfficeAddress(){
    return "710, Westgate by True Value, Nr. YMCA Club, Makarba, Ahmedabad - 380015, India";
}

function facebookLink(){
    return "facebook.com";
}

function linkedinLink(){
    return "linkedin.com";
}

function twitterLink(){
    return "twitter.com";
}

function instagramLink(){
    return "instagram.com";
}

function youtubeLink(){
    return "youtube.com";
}

function whatsappLink(){
    return "whatsapp.com";
}

function getServiceChildMenu( $seoArr, $type=0 ){
    if( $type == 1 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'service-details/web-development').'">Web Development Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/software-development').'">Software Development Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/mobile-app-development').'">Mobile App Development</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/ui-ux-design').'">UI/UX Design Services</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'service-details/digital-marketing').'">Digital Marketing Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/cloud-services').'">Cloud Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/it-consulting-services').'">IT Consulting Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/cyber-security-services').'">Cybersecurity Services</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'service-details/data-analytics').'">Data & Analytics Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/ai-automation').'">AI & Automation Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/it-support-maintenance').'">IT Support & Maintenance</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/blockchain-development').'">Blockchain Development</a>
            </li>
        ';
    }
}

function getCompanyChildMenu( $seoArr, $type=0 ){
    if( $type == 1 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'about-us').'">About US</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="javascript:void(0)">Career</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'gallery').'">Gallery</a>
            </li>
        ';
    }

    if( $type == 4 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'faqs').'">FAQs</a>
            </li>
        ';
    }
}

function getSolutionChildMenu( $seoArr, $type=0 ){
    
    if( $type == 1 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/crm-solutions').'">CRM Solutions</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/erp-solutions').'">ERP Solutions</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/hrms-solutions').'">HRMS Solutions</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/project-management-systems').'">Project Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/helpdesk-systems').'">Helpdesk / Ticketing Systems</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/education-management-systems').'">School / Education Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/healthcare-management-systems').'">Hospital / Healthcare Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/inventory-management-systems').'">Inventory Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/accounting-finance-systems').'">Accounting & Finance Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/ecommerce-management-systems').'">E-Commerce Management Systems</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/real-estate-management-systems').'">Real Estate Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/travel-tourism-management-systems').'">Travel & Tourism Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/document-management-systems').'">Document Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/learning-management-systems').'">Learning Management Systems (LMS)</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/business-intelligenceanalytics-systems').'">Business Intelligence & Analytics Systems</a>
            </li>
        ';
    }
}
?>