# Aware Tools Survey

<img width="1439" alt="image" src="https://github.com/user-attachments/assets/76145f45-5223-450e-b95c-48884cecc247">

**Aware Tools Survey** is a PHP-based platform designed to create and manage surveys securely and anonymously. The platform ensures that surveys are only accessible to the intended recipients, protecting their privacy and respecting their voluntary participation.

## Overview

**Aware Tools Survey** addresses the need for secure and private survey management. It allows organizations and researchers to share surveys with specific participants while guaranteeing anonymity and confidentiality.

### Key Features

- 🔒 **Anonymity**: Participants' identities remain completely anonymous throughout the survey process.
- 👥 **Targeted Sharing**: Surveys are restricted to selected participants only.
- 📋 **Customizable Surveys**: Easily create surveys tailored to specific research or organizational needs.
- 🌐 **Web-Based Platform**: Fully accessible via any web browser.
- 🛡️ **Privacy First**: Ensures no data is collected without the explicit consent of participants.

## Getting Started

### Prerequisites

Ensure you have the following installed:

- PHP 8.0 or higher
- Apache or Nginx server
- MySQL or MariaDB database
- Composer (for PHP dependencies)

### Installation

1. Clone the repository:

```bash
git clone https://github.com/AldoRed/aware-tools-survey.git
cd aware-tools-survey
```

2. Install dependencies:

```bash
cd extensions
composer install
```

3. Configure the environment:

```bash
cp .env.example .env
```

- Update the `.env` file with your database credentials and email settings.

4. Set up the database:

- Import the `database.sql` file into your MySQL or MariaDB database.

5. Deploy the application:

- Move the project files to your web server's root directory.

6. Access the application:

- Open your web browser and navigate to the application URL.
