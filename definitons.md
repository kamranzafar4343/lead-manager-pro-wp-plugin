This is the **highest-yield interview sheet**. If you know these, you'll answer 80–90% of junior WordPress plugin interview questions.

---

# 1. What is a WordPress Plugin? ⭐⭐⭐⭐⭐

**Answer:**

A WordPress plugin is a collection of PHP files that extends WordPress functionality without modifying the WordPress core. When a plugin is activated, WordPress automatically loads it.

---

# 2. What is the Plugin Header?

```php
/*
Plugin Name: Lead Manager Pro
*/
```

**Answer:**

The plugin header is a comment block that WordPress reads to identify the plugin. Without it, the plugin will not appear in the Plugins page.

---

# 3. What is ABSPATH?

```php
if (!defined('ABSPATH')) {
    exit;
}
```

**Answer:**

ABSPATH is a WordPress constant. We check it to prevent users from directly accessing plugin PHP files, which improves security.

---

# 4. What are Hooks? ⭐⭐⭐⭐⭐

**Answer:**

Hooks let developers add or modify WordPress functionality without changing core files.

There are two types:

* **Action** → Executes a function.
* **Filter** → Modifies data and returns it.

---

# 5. Difference between Action and Filter ⭐⭐⭐⭐⭐

**Action**

```php
add_action('init', 'my_function');
```

Runs code.

**Filter**

```php
add_filter('the_title', 'change_title');
```

Changes data and returns it.

---

# 6. What is a Custom Post Type (CPT)? ⭐⭐⭐⭐⭐

**Answer:**

A Custom Post Type is a custom content type created using `register_post_type()`.

In my plugin, I created:

```text
lmp_lead
```

to store leads instead of normal blog posts.

---

# 7. Why use a Custom Post Type instead of a custom table?

**Answer:**

Because leads behave like WordPress content. A Custom Post Type automatically provides an admin interface, permissions, search, and trash functionality. For very large datasets with heavy reporting, I would consider a custom database table.

---

# 8. Where is your data stored? ⭐⭐⭐⭐⭐

**Answer:**

* Lead records are stored in **`wp_posts`**.
* Additional information like email, phone, and status is stored in **`wp_postmeta`**.

---

# 9. What is Post Meta?

**Answer:**

Post Meta stores additional information for a post or Custom Post Type.

Example:

* Email
* Phone
* Company
* Budget
* Status

---

# 10. What is a Shortcode? ⭐⭐⭐⭐⭐

```text
[lead_form]
```

**Answer:**

A shortcode allows us to place dynamic content anywhere in WordPress. When WordPress sees `[lead_form]`, it executes PHP code and displays the lead form.

---

# 11. What is a Meta Box?

**Answer:**

A Meta Box is an additional section on the post editing screen used to display and edit custom fields like Name, Email, Phone, and Status.

---

# 12. What is `wp_insert_post()`?

**Answer:**

`wp_insert_post()` creates a new post in WordPress. In my plugin, it creates a new `lmp_lead` Custom Post Type record.

---

# 13. What is `update_post_meta()`?

**Answer:**

It saves additional information related to a post.

Example:

```php
update_post_meta($post_id, 'lead_email', $email);
```

---

# 14. What is `WP_Query`?

**Answer:**

`WP_Query` is the WordPress class used to retrieve posts or Custom Post Types from the database.

---

# 15. What is a Nonce? ⭐⭐⭐⭐⭐

**Answer:**

A Nonce is a security token used to verify that a request is legitimate and protect against CSRF attacks.

Laravel equivalent:

```php
@csrf
```

---

# 16. Why sanitize user input?

**Answer:**

Sanitization removes unwanted or malicious input before saving it to the database, helping prevent security issues.

Functions used:

```php
sanitize_text_field()
sanitize_email()
sanitize_textarea_field()
```

---

# 17. What is escaping?

**Answer:**

Escaping protects output before displaying it in the browser, helping prevent XSS attacks.

Functions:

```php
esc_html()
esc_attr()
esc_url()
```

---

# 18. What is `add_menu_page()`?

**Answer:**

It creates a custom menu item in the WordPress Admin Dashboard.

---

# 19. What is Composer?

**Answer:**

Composer is PHP's dependency manager. It installs libraries and automatically loads them using `vendor/autoload.php`.

---

# 20. Explain your plugin flow ⭐⭐⭐⭐⭐

**Answer:**

```text
Visitor
      │
      ▼
Lead Form (Shortcode)
      │
      ▼
Submit Form
      │
      ▼
Nonce Verification
      │
      ▼
Sanitize Input
      │
      ▼
wp_insert_post()
      │
      ▼
Create Custom Post Type
      │
      ▼
update_post_meta()
      │
      ▼
Store Lead Details
      │
      ▼
Lead Manager Dashboard
      │
      ▼
View / Edit / Update Lead
```

---

# 21. Why use OOP?

**Answer:**

OOP keeps the plugin organized by separating features into different classes, making the code easier to maintain, extend, and test.

---

# 22. What CRUD operations does your plugin perform?

**Answer:**

* **Create** → Create a new lead using `wp_insert_post()`.
* **Read** → Display leads using `WP_Query`.
* **Update** → Edit lead details using `update_post_meta()`.
* **Delete** → Use the built-in WordPress Trash.

---

# 23. What WordPress APIs did you use?

**Answer:**

* Plugin API
* Hooks API
* Shortcode API
* Custom Post Type API
* Post Meta API
* Admin Menu API

---

# 24. If your plugin had 1 million leads, what would you change?

**Answer:**

I would likely move from a Custom Post Type to a custom database table because it offers better indexing, faster queries, and improved performance for very large datasets and reporting.

---

## Final Tip

When answering, **always relate the concept to your own project**.

For example, don't just say:

> "A Custom Post Type stores custom content."

Instead say:

> "In my Lead Manager Pro plugin, I created a `lmp_lead` Custom Post Type to store website inquiries. Each lead is stored in `wp_posts`, while details like email, phone, and status are stored in `wp_postmeta`."

That shows you understand both the concept and how you applied it.
