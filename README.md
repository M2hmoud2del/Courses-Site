# Coursaty

## Project Overview

**Coursaty** is a dynamic website designed to offer a platform where users can register, log in, browse available courses, and manage their course enrollments. The site features a user-friendly interface built with a combination of PHP, JavaScript, Bootstrap, and CSS to ensure responsiveness and interactivity.

### Core Features
1. **User Authentication**: 
   - Secure login and registration system.
   - Logout functionality.
   
2. **Course Display**:
   - Courses are displayed in card format, providing an overview of each course.
   - Users can browse and enroll in various courses.
   
3. **My Courses**:
   - A dedicated page where users can view and manage their enrolled courses.
   
4. **Profile Management**:
   - Users can view and update personal data on their profile page.
   
5. **Password and Phone Number Validation**:
   - Password validation and visibility toggle using JavaScript for enhanced user experience.
   - Phone number validation is implemented to ensure correct input format.
   
6. **Database Integration**:
   - All user and course data is stored and managed using a backend database.
   
7. **Responsive UI**:
   - Navbar and footer included across pages for easy navigation.
   - Built with Bootstrap for responsive design on all device types.

## Technology Stack
- **PHP (83.4%)**: Powers the server-side logic and handles dynamic content generation and database interactions.
- **JavaScript (9.4%)**: Handles client-side functionality such as password and phone number validation and interactive features like toggling password visibility.
- **CSS (4.2%)**: Custom styles to enhance the website's visual appearance.
- **HTML (3.0%)**: Structuring the website content.

## Setup Instructions

1. **Clone the Repository**:
   ```
   git clone https://github.com/M2hmoud2del/Courses-Site.git
   ```
2. **Database Setup**:
   - Import the provided database SQL file into your local database (e.g., MySQL).
   
3. **Configure Database Connection**:
   - Edit the `DBConnection.php` file to set up the correct database credentials for your environment.

4. **Run the Project Locally**:
   - Use a local server (XAMPP, WAMP) to host the website.
   - Access the website through `http://localhost/`.

## Project Structure

- **Database**: Stores user data, course information, and enrollment details.
- **Login/Register**: Secure user authentication system using PHP.
- **Cards for Courses**: Displays courses in a card layout for easy browsing.
- **My Courses Page**: Lists courses that the user has enrolled in.
- **Profile Page**: Displays and allows updates to personal data for each user.
- **Footer and Navbar**: Common UI components for navigation and site structure.
- **Logout**: Ends the user session securely.
- **Validation**: Password and phone number validation ensure user data integrity.

## Contribution Guidelines
Feel free to fork the repository and submit pull requests. For major changes, please open an issue first to discuss what you'd like to change.

## License
This project is open-source. Contributions are welcome from the community!

---

Developed by **Mahmoud Adel**  
[GitHub](https://github.com/M2hmoud2del) | [LinkedIn](https://www.linkedin.com/in/mahmoud-adel-975026127/)
