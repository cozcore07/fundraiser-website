# 🌟 Team Raiser Fundraiser Website

A responsive web application designed to facilitate donations, track donor activity, manage mailing lists, and recognize contributors — built for fundraising teams and nonprofit causes.

## 🚀 Features

- Secure donation form with amount entry  
- Payment gateway integration (e.g., Stripe, PayPal)  
- Dynamic donor recognition section  
- Subscription to mailing list (CSV-based or Mailchimp ready)  
- Clean and responsive design  
- Easy deployment on any LAMP/LEMP stack  

## 📦 Tech Stack

- Frontend: HTML5, CSS3  
- Backend: PHP 8+  
- Database: (optional for extension) MySQL  
- Hosting: Compatible with shared hosting or cloud VPS  

## 📁 Structure

project/
├── index.html # Main UI
├── style.css # Stylesheet
├── process_donation.php # Handles donation submissions
├── subscribe.php # Handles newsletter subscriptions
├── donors.txt # Log file for donations
├── subscribers.txt # Log file for email list


## 🛠 Setup Instructions

1. Upload all files to your hosting environment (Apache + PHP).
2. Make sure `donors.txt` and `subscribers.txt` are writable (`chmod 666`).
3. Configure your payment gateway in `process_donation.php` if integrating real payments.
4. Optionally connect Mailchimp or other services in `subscribe.php`.

## 🔒 Security Note

- Sanitize and validate inputs before use in production.
- Replace `.txt` logging with secure database storage and HTTPS.

## 📧 Contact

For queries or customization requests, please contact:

- [Your Name] at [your-email@example.com]  
- 📧 Cozcore Technology — info@cozcore.com  
- 🌐 Website: [www.cozcore.com](http://www.cozcore.com)

---

Built with ❤️ to support good causes.

