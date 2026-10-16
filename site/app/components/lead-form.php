<?php
/**
 * Contact / project enquiry form. Progressive enhancement: works without JS (plain POST + redirect),
 * and with JS it submits via fetch() and shows inline status.
 * @var string|null $form_id
 * @var string|null $source   which page the lead came from
 */
$form_id = $form_id ?? 'lead-form';
$source  = $source ?? request_path();
$sent    = ($_GET['sent'] ?? '') === '1';
$err     = ($_GET['error'] ?? '') !== '';
?>
<form class="form" id="<?= e($form_id) ?>" method="post" action="<?= e(url('api/lead')) ?>" data-lead-form novalidate>
    <div class="form__row">
        <div class="field">
            <label for="<?= e($form_id) ?>-name">Full name <span aria-hidden="true">*</span></label>
            <input id="<?= e($form_id) ?>-name" name="name" type="text" autocomplete="name" required maxlength="100">
        </div>
        <div class="field">
            <label for="<?= e($form_id) ?>-email">Email <span aria-hidden="true">*</span></label>
            <input id="<?= e($form_id) ?>-email" name="email" type="email" autocomplete="email" inputmode="email" required maxlength="150">
        </div>
    </div>
    <div class="form__row">
        <div class="field">
            <label for="<?= e($form_id) ?>-phone">Phone <small>(optional)</small></label>
            <input id="<?= e($form_id) ?>-phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" maxlength="25">
        </div>
        <div class="field">
            <label for="<?= e($form_id) ?>-subject">I'm interested in</label>
            <select id="<?= e($form_id) ?>-subject" name="subject">
                <?php foreach (cfg('subjects') as $s): ?><option><?= e($s) ?></option><?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="field">
        <label for="<?= e($form_id) ?>-message">Tell us about your project <span aria-hidden="true">*</span></label>
        <textarea id="<?= e($form_id) ?>-message" name="message" rows="5" required minlength="10" maxlength="3000"></textarea>
    </div>

    <!-- Anti-spam: honeypot (hidden from people) + render timestamp -->
    <div class="hp" aria-hidden="true"><label>Leave this empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
    <input type="hidden" name="ts" value="<?= time() ?>">
    <input type="hidden" name="source" value="<?= e($source) ?>">

    <button class="btn btn--primary" type="submit">
        <span class="btn__label">Send message</span> <?= icon('arrow-right', 18) ?>
    </button>
    <p class="form__status<?= $sent ? ' is-ok' : ($err ? ' is-error' : '') ?>" role="status" aria-live="polite"><?php
        if ($sent) echo 'Thank you! Your message has been received - we will get back to you shortly.';
        elseif ($err) echo 'Please check your details and try again.';
    ?></p>
</form>
