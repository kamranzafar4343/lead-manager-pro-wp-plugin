<form method="post" style="max-width:600px;">

    <?php wp_nonce_field('lmp_save_frontend_lead', 'lmp_lead_form_nonce'); ?>

    <p>
        <label>Name</label><br>
        <input type="text" name="lead_name" required style="width:100%;">
    </p>

    <p>
        <label>Email</label><br>
        <input type="email" name="lead_email" required style="width:100%;">
    </p>

    <p>
        <label>Phone</label><br>
        <input type="text" name="lead_phone" style="width:100%;">
    </p>

    <p>
        <label>Company</label><br>
        <input type="text" name="lead_company" style="width:100%;">
    </p>

    <p>
        <label>Service Needed</label><br>
        <input type="text" name="lead_service" style="width:100%;">
    </p>

    <p>
        <label>Budget</label><br>
        <input type="text" name="lead_budget" style="width:100%;">
    </p>

    <p>
        <label>Message</label><br>
        <textarea name="lead_message" rows="5" style="width:100%;"></textarea>
    </p>

    <p>
        <button type="submit" name="lmp_submit_lead">Submit Lead</button>
    </p>

</form>