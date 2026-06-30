# Lead Manager Pro

A custom WordPress plugin built from scratch to manage website leads directly inside the WordPress Admin Dashboard.

Instead of only sending contact form emails, this plugin stores every inquiry as a Lead, allowing administrators to view, edit, organize, and track customer inquiries in one place.

---

# Features

- Custom WordPress Plugin
- Object-Oriented PHP (OOP)
- Custom Admin Dashboard
- Custom Post Type (Leads)
- Custom Meta Fields
- Lead CRUD Operations
- WordPress Hooks (Actions)
- WordPress Shortcodes
- Nonce Security
- Input Sanitization
- Composer Integration
- Dashboard Statistics
- Custom Admin Columns
- Lead Status Management

---

# Why Lead Manager Pro?

Normally a website contact form works like this:

```text
Website
   │
   ▼
Contact Form
   │
   ▼
Admin Email Inbox
```

### Problems

- Emails get buried.
- No history of leads.
- No lead management.
- No status tracking.
- Difficult to search.
- Difficult for teams to manage.
- No reporting.

Lead Manager Pro solves this problem.

```text
Website
   │
   ▼
Lead Form
   │
   ▼
WordPress
   │
   ▼
Lead Manager Dashboard
   │
   ▼
Manage Leads
```

---

# Current Workflow

```text
Visitor
   │
   ▼
Fill Lead Form
   │
   ▼
Submit
   │
   ▼
WordPress
   │
   ▼
Create Lead (Custom Post Type)
   │
   ▼
Store Lead Details (Post Meta)
   │
   ▼
Admin Dashboard
   │
   ▼
View / Edit / Update Lead
```

---

# Current Features

### Create Lead

Store new leads from the frontend.

### View Leads

View all submitted leads inside the WordPress Admin Dashboard.

### Update Lead

Edit lead details and update lead status.

### Delete Lead

Uses the built-in WordPress Trash system.

---

# Lead Information

Each lead stores:

- Name
- Email
- Phone
- Company
- Service Required
- Budget
- Message
- Status

---

# Lead Status

Current statuses include:

- New
- Contacted
- Qualified
- Converted
- Rejected

---

# WordPress Concepts Covered

## Plugin Development

- Plugin Header
- Plugin Bootstrap
- Plugin Constants
- Composer
- Autoloading
- ABSPATH Security

---

## PHP

- Classes
- Constructors
- Object-Oriented Programming
- File Separation

---

## WordPress Hooks

- add_action()
- admin_menu
- init
- add_meta_boxes
- save_post

---

## Custom Post Types

Created a custom post type:

```text
lmp_lead
```

instead of creating a custom database table.

---

## Post Meta

Lead details are stored using WordPress Post Meta.

Fields include:

- Name
- Email
- Phone
- Company
- Service
- Budget
- Message
- Status

---

## Security

Implemented:

- ABSPATH protection
- Nonce Verification
- Input Sanitization

Functions used:

- sanitize_text_field()
- sanitize_email()
- sanitize_textarea_field()
- wp_verify_nonce()

---

## Admin Dashboard

Implemented:

- Custom Dashboard
- Custom Menu
- Lead List
- Custom Columns
- Status Badges

---

# Project Structure

```text
lead-manager-pro/

│
├── assets/
│   ├── css/
│   └── js/
│
├── includes/
│   ├── admin-menu.php
│   ├── contact-form.php
│   ├── lead-columns.php
│   ├── lead-fields.php
│   ├── lead-post-type.php
│   ├── options-page.php
│   └── utilities.php
│
├── templates/
│   └── lead-form.php
│
├── vendor/
│
├── composer.json
├── contact-plugin.php
└── README.md
```

---

# Technologies Used

- PHP
- WordPress
- Composer
- HTML
- CSS
- JavaScript

---

# Installation

## Requirements

- PHP 8.0+
- WordPress 6.x+
- Composer

---

## Step 1

Clone the repository

```bash
git clone https://github.com/yourusername/lead-manager-pro.git
```

or download the ZIP.

---

## Step 2

Move the plugin folder into:

```text
wp-content/plugins/
```

Final structure should be:

```text
wp-content/
└── plugins/
    └── lead-manager-pro/
        ├── contact-plugin.php
        ├── composer.json
        ├── includes/
        ├── templates/
        └── assets/
```

---

## Step 3

Open Terminal

```bash
cd wp-content/plugins/lead-manager-pro
```

Run:

```bash
composer install
```

Composer will install all required packages and create the **vendor/** directory.

---

## Step 4

Open your WordPress Admin Dashboard.

Go to:

```text
Plugins
```

Activate:

```text
Lead Manager Pro
```

---

# Usage

## Create the Lead Form Page

Go to:

```text
Pages
→ Add New
```

Create a page named:

```text
Get Quote
```

or

```text
Contact Us
```

Add the shortcode:

```text
[lead_form]
```

Publish the page.

---

## Submit a Lead

Visit the page from the frontend.

Fill in:

- Name
- Email
- Phone
- Company
- Service
- Budget
- Message

Click:

```text
Submit
```

---

## View Leads

Go to:

```text
WordPress Admin

Lead Manager

↓

Leads
```

Here you can:

- View all leads
- Edit leads
- Update lead status
- Delete (Trash) leads

---

# Current Project Flow

```text
Website Visitor
        │
        ▼
Lead Form
        │
        ▼
WordPress Shortcode
        │
        ▼
Create Custom Post Type
        │
        ▼
Save Post Meta
        │
        ▼
Lead Manager Dashboard
        │
        ▼
Manage Leads
```

---

# Future Improvements

- AJAX Submission
- REST API
- Email Notifications
- Dashboard Widgets
- CSV Export
- Search & Filters
- Webhooks
- Lead Assignment
- Notes
- Activity Timeline

---

# Learning Outcomes

This project helped me understand:

- WordPress Plugin Architecture
- Object-Oriented Plugin Development
- WordPress Hooks
- Custom Post Types
- Meta Boxes
- Admin Menus
- Custom Columns
- Plugin Security
- Composer Integration
- WordPress Coding Standards

---

# Interview Topics Covered

This project demonstrates knowledge of:

- WordPress Plugin Development
- PHP OOP
- WordPress Hooks
- Shortcodes
- Custom Post Types
- Meta Fields
- Admin Dashboard Development
- CRUD Operations
- Security Best Practices
- Composer
- Plugin Structure

---

# Project Status

## Completed

- Plugin Bootstrap
- Admin Dashboard
- Custom Post Type
- Lead CRUD
- Meta Fields
- Custom Columns
- Lead Status Management
- Frontend Lead Form

## Planned

- AJAX Submission
- REST API
- Email Notifications
- CSV Export
- Dashboard Widgets
- Search & Filters
- Webhooks

---

## Author

**Kamran Zafar**

Backend Developer | PHP | Laravel | WordPress | Oracle SQL