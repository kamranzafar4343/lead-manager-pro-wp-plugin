# Lead Manager Pro

A custom WordPress plugin built from scratch to manage website leads inside the WordPress dashboard.

Instead of only sending contact form emails, this plugin stores every inquiry as a Lead, allowing administrators to track, manage, and update customer inquiries from one place.

---

# Features

- Custom WordPress Plugin
- Object-Oriented PHP (OOP)
- Custom Admin Dashboard
- Custom Post Type (Leads)
- Custom Meta Fields
- Lead CRUD Operations
- WordPress Hooks (Actions)
- Shortcodes
- Input Sanitization
- WordPress Nonce Security
- WordPress Plugin Architecture
- Composer Integration
- Dashboard Statistics (In Progress)
- AJAX Submission (Coming Soon)
- REST API (Coming Soon)
- Email Notifications (Coming Soon)
- CSV Export (Coming Soon)

---

# Why this Plugin?

Normally a website contact form only sends an email.

```
Website
    │
    ▼
Contact Form
    │
    ▼
Admin Email
```

Problems

- Emails get buried.
- No lead history.
- No search.
- No status tracking.
- No reporting.
- Difficult for teams to manage.

Lead Manager Pro solves this by storing every inquiry inside WordPress.

```
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

```
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
Store Details (Post Meta)
   │
   ▼
Admin Dashboard
   │
   ▼
View / Edit / Update Lead
```

---

# Current Functionality

### Create Lead

Stores a new lead.

### Read Leads

Displays all leads inside WordPress.

### Update Lead

Allows editing lead information.

### Delete Lead

Uses the built-in WordPress Trash.

---

# Lead Information

Each Lead stores

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

Current statuses

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
- ABSPATH Security
- Plugin Constants
- Composer
- Autoloading

---

## PHP

- Classes
- Constructors
- Object-Oriented Programming
- File Separation
- Namespaces (Future)

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

```
lmp_lead
```

instead of creating a custom database table.

---

## Custom Meta Fields

Used Post Meta for storing

- Email
- Phone
- Company
- Budget
- Service
- Status
- Message

---

## Security

- ABSPATH
- Nonce Verification
- Input Sanitization

Using

- sanitize_text_field()
- sanitize_email()
- sanitize_textarea_field()

---

## Admin Panel

Implemented

- Custom Dashboard
- Custom Menu
- Lead List
- Custom Columns
- Status Badges

---

# Project Structure

```
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
- Carbon Fields
- HTML
- CSS
- JavaScript

---

# Future Improvements

- AJAX Lead Submission
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

# What I Learned

During this project I learned

- WordPress Plugin Architecture
- Object-Oriented Plugin Development
- WordPress Hooks
- Custom Post Types
- Meta Boxes
- Admin Menus
- Custom Columns
- WordPress Security
- Composer Integration
- WordPress Coding Standards

---

# Interview Topics Covered

This project demonstrates knowledge of

- Plugin Development
- OOP PHP
- WordPress Hooks
- Custom Post Types
- Meta Fields
- Admin Development
- Security Best Practices
- CRUD Operations
- WordPress Plugin Structure

---

# Current Project Status

✔ Plugin Bootstrap

✔ Admin Dashboard

✔ Custom Post Type

✔ Lead CRUD

✔ Meta Fields

✔ Custom Columns

✔ Status Management

🚧 AJAX

🚧 REST API

🚧 Email Notifications

🚧 CSV Export

🚧 Dashboard Widgets