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
    return "Surat - 395004, India";//103, Hany Arcade, Dabholi, Katargam, 
}

function representativeOfficeAddress(){
    return officeAddress();
    return "710, Westgate by True Value, Nr. YMCA Club, Makarba, Ahmedabad - 380015, India";
}

function facebookLink(){
    return "https://www.facebook.com/profile.php?id=61589868721671";
}

function linkedinLink(){
    return "https://www.linkedin.com/in/gautam-kakadiya-816297a1/";
}

function twitterLink(){
    return "https://www.x.com";
}

function instagramLink(){
    return "https://www.instagram.com/shreegurvetech/";
}

function youtubeLink(){
    return "https://www.youtube.com/@ShreeGurave";
}

function whatsappLink(){
    return "https://wa.me/8200017181?text=Hello%20Shree%20Gurve%20Tech%20Team%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services.%20Please%20assist%20me.%20Thank%20you%21";
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
                <a href="'.($seoArr['base_url'].'proposals').'">Proposal</a>
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

function getToolsChildMenu( $seoArr, $type=0 ){
    if( $type == 1 ){
        return '
            <li>
                <a href="https://merge-pdf.shreegurvetech.com" target="_blank" rel="noopener">Merge PDF</a>
            </li>
            <li>
                <a href="https://split-page.shreegurvetech.com" target="_blank" rel="noopener">Split PDF Pages</a>
            </li>
            <li>
                <a href="https://remove-page.shreegurvetech.com" target="_blank" rel="noopener">Remove PDF Pages</a>
            </li>
            <li>
                <a href="https://pdf-editor.shreegurvetech.com" target="_blank" rel="noopener">PDF Editor</a>
            </li>
            <li>
                <a href="https://stamp-sign-pdf.shreegurvetech.com" target="_blank" rel="noopener">Stamp &amp; Sign PDF</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="https://img-compress.shreegurvetech.com" target="_blank" rel="noopener">Image Compressor</a>
            </li>
            <li>
                <a href="https://pdf-image-studio.shreegurvetech.com" target="_blank" rel="noopener">PDF Image Studio</a>
            </li>
            <li>
                <a href="https://rmiwm.shreegurvetech.com" target="_blank" rel="noopener">Remove Image Watermark</a>
            </li>
            <li>
                <a href="https://rmvwm.shreegurvetech.com" target="_blank" rel="noopener">Remove Video Watermark</a>
            </li>
            <li>
                <a href="https://flipbook.shreegurvetech.com" target="_blank" rel="noopener">Flipbook Maker</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="https://social-genius.shreegurvetech.com" target="_blank" rel="noopener">Social Genius</a>
            </li>
            <li>
                <a href="https://leadscout.shreegurvetech.com" target="_blank" rel="noopener">LeadScout</a>
            </li>
            <li>
                <a href="https://secure-gateway.shreegurvetech.com" target="_blank" rel="noopener">Secure Gateway</a>
            </li>
            <li>
                <a href="'.$seoArr['base_url'].'tools'.'">View All Tools</a>
            </li>
        ';
    }
}
?>