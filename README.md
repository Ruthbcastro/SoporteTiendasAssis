# Assis Store Support System

## Description
This project is a ticket management system designed to help Assis stores and departments efficiently manage and resolve issues. The system provides customized functionalities for different user roles, ensuring an organized and effective workflow.

## Key Features
- **Ticket Management:**
  - Create, assign, and resolve tickets.
  - Track tickets by categories and statuses.
  - Add comments to tickets for improved communication.

- **Defined Roles:**
  1. **Super Admin:**
     - Configure teams, categories, states, and custom fields.
     - Manage users and enable automatic ticket assignment.
  2. **Administrator:**
     - Resolve tickets, generate reports, and use advanced filters.
     - Change ticket statuses and reassign tickets.
  3. **Store Manager:**
     - View tickets assigned to their departments or stores.
  4. **Normal User:**
     - View and track their own tickets.
     - Add comments to assigned tickets.
  5. **Public User:**
     - Access limited features without credentials.

- **Advanced Filters:**
  - Filter tickets by status, category, assigned user, ID, and more.
  - Features available for Super Admins and Administrators.

- **Statistics (in development):**
  - Calculate the average resolution time.
  - Total tickets resolved by category or user.

## Technologies Used
- **Backend:** PHP with MySQL database.
- **Frontend:** HTML, CSS (Bootstrap), JavaScript.
- **Database:** MySQL, with hashed password storage.
- **Security:**
  - User authentication with session handling.
  - CSRF protection in forms.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/Ruthbcastro/SoporteTiendasAssis.git
