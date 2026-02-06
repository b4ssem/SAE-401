<a id="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<br />
<div align="center">
  <a href="https://github.com/b4ssem/SAE-401">
    <img src="https://b4ssem.com/documents/logo-b4.ico" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">SAE 401 - Dynamic Portfolio</h3>

  <p align="center">
    Dynamization of a static portfolio website using PHP and MySQL.
    <br />
    <a href="https://github.com/b4ssem/SAE-401"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://meghiche.alwaysdata.net/portfolio/index.php">View Demo</a>
    ·
    <a href="https://github.com/b4ssem/SAE-401/issues">Report Bug</a>
    ·
    <a href="https://github.com/b4ssem/SAE-401/issues">Request Feature</a>
  </p>
</div>



<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



## About The Project

[![Product Name Screen Shot][product-screenshot]](https://github.com/b4ssem/SAE-401)

This project was developed as part of the **SAE 401** academic course. The main objective was to transform a static HTML/CSS portfolio into a dynamic web application using a Back-End language and a Database.

The original static design and frontend integration were based on the [Portfolio Responsive Complete](https://github.com/bedimcode/portfolio-responsive-complete) repository by **Bedimcode**.

Key features implemented in this dynamic version:
* **Database Integration:** Storing every editable content in a MySQL database.
* **Back-Office (Admin Panel):** A secure administration area to manage content without touching the code.
* **Dynamic Rendering:** Content on the homepage (Hero, Skills, Portfolio) is fetched via PHP.
* **CRUD Operations:** Create, Read, Update, and Delete functionalities for portfolio items.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

This project is built using the following technologies:

* [![HTML][HTML5]][HTML-url]
* [![CSS][CSS3]][CSS-url]
* [![JavaScript][JavaScript]][JS-url]
* [![PHP][PHP]][PHP-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

You need a local server environment (AMP stack) that supports PHP and MySQL, such as:
* XAMPP
* WAMP
* Laragon
* MAMP

### Installation

1.  Clone the repo
    ```sh
    git clone https://github.com/b4ssem/SAE-401.git
    ```
2.  Move the project folder to your server's root directory (e.g., `htdocs` or `www`).
3.  **Database Setup:**
    * Open phpMyAdmin (or your preferred SQL tool).
    * Create a new database (e.g., `portfolio_db`).
    * Import the `.sql` file located in the `database/` folder (or root) of this project. (not available yet, will be when the whole website will be dynamic)
4.  **Configuration:**
    * Open the database connection file (e.g., `includes/core/db.php`).
    * Update the credentials to match your local environment:
    ```php
    $host = "localhost";
    $dbname = "portfolio_db"; // Change if named differently
    $username = "root";
    $password = "";
    ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Usage

Once installed, navigate to the local URL (e.g., `http://localhost/SAE-401`).

**To access the Admin Panel:**
1.  Go to the login page (e.g., `/login.php`).
2.  Log in using the administrator credentials.
3.  Use the dashboard to Add, Edit, or Delete projects and skills.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Roadmap

- [x] Integrate HTML/CSS/JS Template
- [x] Design Database Schema (StarUML)
- [x] Establish Database Connection
- [x] Implement Admin Authentication (login.php)
- [x] Implement Admin Panel (backend.php)
- [x] Build CRUD for Navbar
- [x] Build CRUD for Socials
- [ ] Build CRUD for Global settings
- [ ] Build CRUD for Projects
- [ ] Build CRUD for Contact
- [ ] Implement Contact Form logic
- [ ] Publish the SQL file and php files concerning the DB

See the [open issues](https://github.com/b4ssem/SAE-401/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Contact

Bassem - [@b4ssem](https://www.linkedin.com/in/b4ssem/)

Project Link: [https://github.com/b4ssem/SAE-401](https://github.com/b4ssem/SAE-401)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Acknowledgments

* [Template by Bedimcode](https://github.com/bedimcode/portfolio-responsive-complete) - The original static HTML/CSS template.
* [Boxicons](https://boxicons.com/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



[contributors-shield]: https://img.shields.io/github/contributors/b4ssem/SAE-401.svg?style=for-the-badge
[contributors-url]: https://github.com/b4ssem/SAE-401/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/b4ssem/SAE-401.svg?style=for-the-badge
[forks-url]: https://github.com/b4ssem/SAE-401/network/members
[stars-shield]: https://img.shields.io/github/stars/b4ssem/SAE-401.svg?style=for-the-badge
[stars-url]: https://github.com/b4ssem/SAE-401/stargazers
[issues-shield]: https://img.shields.io/github/issues/b4ssem/SAE-401.svg?style=for-the-badge
[issues-url]: https://github.com/b4ssem/SAE-401/issues
[license-shield]: https://img.shields.io/github/license/b4ssem/SAE-401.svg?style=for-the-badge
[license-url]: https://github.com/b4ssem/SAE-401/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/b4ssem/
[product-screenshot]: preview.png
[HTML5]: https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white
[HTML-url]: https://developer.mozilla.org/en-US/docs/Web/HTML
[CSS3]: https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white
[CSS-url]: https://developer.mozilla.org/en-US/docs/Web/CSS
[JavaScript]: https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E
[JS-url]: https://developer.mozilla.org/en-US/docs/Web/JavaScript
[PHP]: https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
