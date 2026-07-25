<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'faqs',
    'title' => "FAQs - Shree Gurve Technology | IT Services & Software Development Questions",
    'meta_description' => "Find answers to common questions about Shree Gurve Technology services including web development, software development, mobile apps, and IT solutions.",
    'h1_tag' => "Frequently Asked Questions (FAQs)",
    'description' => "Welcome to the Frequently Asked Questions (FAQ) page of Shree Gurve Technology. Here you can find answers to common questions about our IT services, including web development, software development, mobile application development, UI/UX design, digital marketing, cloud solutions, and technology consulting.",
    'keyword' => "Shree Gurve Technology provides web development, software development, mobile apps, UI/UX design, and digital marketing services.",
];

include_once('elements/header.php');
?>

<?php
    // Build FAQPage schema directly from the same data source that renders
    // the visible accordion below, so schema always matches on-page content.
    $faqMainEntity = [];
    foreach ( getFAQsList() as $section ) {
        foreach ( $section['faqs'] as $faq ) {
            $answerText = $faq['answer'];
            if ( is_array( $answerText ) ) {
                $answerText = $answerText[0] . ' ' . implode( ', ', $answerText[1] );
            }
            $faqMainEntity[] = [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => strip_tags( $answerText ),
                ],
            ];
        }
    }

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'FAQPage',
                '@id' => $seoArr['base_url'].'faqs#faq',
                'url' => $seoArr['base_url'].'faqs',
                'name' => 'Frequently Asked Questions | Shree Gurve Technology',
                'inLanguage' => 'en',
                'mainEntity' => $faqMainEntity,
            ],
            [
                '@type' => 'WebPage',
                '@id' => $seoArr['base_url'].'faqs#webpage',
                'url' => $seoArr['base_url'].'faqs',
                'name' => 'Frequently Asked Questions',
                'isPartOf' => [ '@id' => $seoArr['base_url'].'#website' ],
                'breadcrumb' => [ '@id' => $seoArr['base_url'].'faqs#breadcrumb' ],
                'about' => [ '@id' => $seoArr['base_url'].'#organization' ],
            ],
            [
                '@type' => 'BreadcrumbList',
                '@id' => $seoArr['base_url'].'faqs#breadcrumb',
                'itemListElement' => [
                    [ '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $seoArr['base_url'] ],
                    [ '@type' => 'ListItem', 'position' => 2, 'name' => 'Frequently Asked Questions', 'item' => $seoArr['base_url'].'faqs' ],
                ],
            ],
            [
                '@type' => 'HowTo',
                '@id' => $seoArr['base_url'].'faqs#workflow',
                'name' => 'Our Project Workflow',
                'step' => [
                    [ '@type' => 'HowToStep', 'position' => 1, 'name' => 'Select Project', 'text' => 'Discuss business requirements and project objectives.' ],
                    [ '@type' => 'HowToStep', 'position' => 2, 'name' => 'Project Analysis', 'text' => 'Analyze technical requirements and prepare implementation strategy.' ],
                    [ '@type' => 'HowToStep', 'position' => 3, 'name' => 'Plan & Execute', 'text' => 'Develop, test, and deploy the solution.' ],
                    [ '@type' => 'HowToStep', 'position' => 4, 'name' => 'Deliver Result', 'text' => 'Launch the project and provide ongoing maintenance and support.' ],
                ],
            ],
            [
                '@type' => 'Organization',
                '@id' => $seoArr['base_url'].'#organization',
                'name' => 'Shree Gurve Technology',
                'url' => $seoArr['base_url'],
                'logo' => $seoArr['base_url'].'assets/images/logo.png',
                'telephone' => callNumber(),
                'email' => contactEmail(),
            ],
            [
                '@type' => 'WebSite',
                '@id' => $seoArr['base_url'].'#website',
                'url' => $seoArr['base_url'],
                'name' => 'Shree Gurve Technology',
                'publisher' => [ '@id' => $seoArr['base_url'].'#organization' ],
            ],
        ],
    ];
?>
<script type="application/ld+json">
<?php echo json_encode( $faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );?>
</script>
{

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">
                Frequently Asked Question
            </h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url']; ?>">Home</a></li>
                <li>Frequently Asked Question</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <div class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></div> 
                    <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
                </div>
                FAQ
            </span>
            <h2 class="sec-title">
                Talk To About Any 
                <span class="text-theme">
                    Question?
                </span>
            </h2>
        </div>

        <?php foreach ( getFAQsList() as $sectionKey => $section): ?>

            <div class="accordion mt-3" id="<?= $section['accordion_id'] ?>">

                <div class="accordion-item">

                    <h2 class="accordion-header" id="<?= $section['heading_id'] ?>">

                        <button class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#<?= $section['collapse_id'] ?>"
                            aria-expanded="true">

                            <span class="faq-title">
                                <?= $section['title'] ?>
                            </span>

                        </button>

                    </h2>

                    <div id="<?= $section['collapse_id'] ?>"
                        class="accordion-collapse collapse"
                        data-bs-parent="#<?= $section['accordion_id'] ?>">

                        <div class="accordion-body">

                            <div class="row">

                                <?php
                                $faqChunks = array_chunk(
                                    $section['faqs'],
                                    ceil(count($section['faqs']) / 2)
                                );
                                ?>

                                <?php foreach ($faqChunks as $colIndex => $faqColumn): ?>

                                    <div class="col-xl-6">

                                        <div class="accordion-area accordion"
                                            id="<?= $sectionKey ?>-faqAccordion-<?= $colIndex ?>">

                                            <?php foreach ($faqColumn as $faqIndex => $faq):

                                                $number = ($colIndex * count($faqChunks[0])) + $faqIndex + 1;

                                                $headingId = $sectionKey . '-heading-' . $number;
                                                $collapseId = $sectionKey . '-collapse-' . $number;

                                            ?>

                                                <div class="accordion-card style2">

                                                    <div class="accordion-header"
                                                        id="<?= $headingId ?>">

                                                        <button class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#<?= $collapseId ?>"
                                                            aria-expanded="false"
                                                            aria-controls="<?= $collapseId ?>">

                                                            <?= $number ?>.
                                                            <?= $faq['question'] ?>

                                                        </button>

                                                    </div>

                                                    <div id="<?= $collapseId ?>"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#<?= $sectionKey ?>-faqAccordion-<?= $colIndex ?>">

                                                        <div class="accordion-body">

                                                            <?php if (is_array($faq['answer'])): ?>

                                                                <p class="faq-text">
                                                                    <?= $faq['answer'][0] ?>
                                                                </p>

                                                                <ul class="faq-text">

                                                                    <?php foreach ($faq['answer'][1] as $list): ?>

                                                                        <li><?= $list ?></li>

                                                                    <?php endforeach; ?>

                                                                </ul>

                                                            <?php else: ?>

                                                                <p class="faq-text">
                                                                    <?= $faq['answer'] ?>
                                                                </p>

                                                            <?php endif; ?>

                                                        </div>

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>
</div>

<?php
include_once('elements/how-work-step.php');
include_once('elements/happy-client.php');
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>