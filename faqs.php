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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
                        aria-labelledby="<?= $section['heading_id'] ?>"
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
                                                        aria-labelledby="<?= $headingId ?>"
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