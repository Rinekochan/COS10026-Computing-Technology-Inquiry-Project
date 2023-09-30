<!--
    Name/ID: Humayra Jahan 104757245
    Assignment 1
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta name = "description" content = "This is the Jobs Description Page of the HPM Company">
    <meta name = "keywords" content = "JobsDescription">
    <!--The Developer of this page is Humayra Jahan.--> 
    <meta name = "author" content = "Humayra Jahan">
    <title>HPM: Job Vacancy and Careers</title>
    <!-- This .inc file includes all css locations for each resolution of devices -->
    <?php include 'cssfiles.inc';?>
    <link rel = "shortcut icon" href="images/favicon.png">
</head>
<body id = "MainBackground">
    <!--Developer: Viet Hoang Pham. This is Navigation Menu code. You should add this at the start of <body> element-->
    <?php include 'header.inc';?>
    <!--End of Navigation Menu Code.-->

    <!--Developer: Viet Hoang Pham. Scroll Up Button-->
    <?php include 'scrollupbutton.inc';?>
    <!-- End of Scroll up Button -->
    
    <!--Developer: Humayra Jahan. This is the Jobs page.-->
    <main>
        <h1 id = "HeaderJob">Job Vacancy and Careers</h1>
        <section id = "JobsBody">
            <header>
                <h2>Why Join Our Team?</h2>
                <p>At our company, we're committed to fostering a culture of innovation and collaboration.</p>
            </header>
            <aside>
                <p><em><strong>"Join us to reshape industries and create a smarter future. <br>Pioneering Tomorrow's Tech, Today."</strong></em></p>
            </aside>
            <h2>Current Job Openings</h2>
            <!-- Set a container for Software Developer desription -->
            <section class = "job-listing">
                <h3>Software Developer</h3>          
                <p>Join our team as a Software Developer</p>
                <h4>Position Description:</h4>
                <table>
                    <tr>
                        <th>Reference Number</th>
                        <td>00001</td>
                    </tr>
                    <!-- Jobs Brief Description -->
                    <tr>
                        <th>Brief Description</th>
                        <td>Design, code, and maintain software applications to drive innovation.</td>
                    </tr>
                    <!-- Jobs Salary Range -->
                    <tr>
                        <th>Salary Range</th>
                        <td>$70,000 - $100,000 per year</td>
                    </tr>
                    <!-- Person that successful applicant report to -->
                    <tr>
                        <th>Reporting to</th>
                        <td>Lead Software Developer</td>
                    </tr>
                    <!-- Jobs Key Responsibilities -->
                    <tr>
                        <th>Key Responsibilities</th>
                        <td>
                            <ol>
                                <li>Architect, develop, and maintain high-quality software solutions.</li>
                                <li>Collaborate with multidisciplinary teams to define project specifications.</li>
                                <li>Identify and rectify software defects and performance bottlenecks.</li>
                                <li>Participate in thorough code reviews and provide valuable insights.</li>
                            </ol> 
                        </td>
                    </tr>
                    <!-- Jobs Requirements -->
                    <tr>
                        <th>Required</th>
                        <td>
                            <ul>
                                <li>Bachelor's degree in Computer Science, Software Engineering, or related field.</li>
                                <li>Proficiency in languages like Java, C++, or Python.</li>
                                <li>3+ years of professional software development experience.</li>
                                <li>Familiarity with modern web development frameworks.(Optional)</li>
                                <li>Experience with version control systems, such as Git.(Optional)</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <a href="apply.html" class="apply-button"> Apply Now </a>
            </section>
            <!-- Set a container for Network Administrator desription -->
            <section class = "job-listing">
                <h3>Network Administrator</h3>
                <p>Join our team as a Network Administrator</p>
                <h4>Position Description:</h4>
                <table>
                    <!-- Jobs Reference Number -->
                    <tr>
                        <th>Reference Number</th>
                        <td>00010</td>
                    </tr>
                    <!-- Jobs Brief Description -->
                    <tr>
                        <th>Brief Description</th>
                        <td>Manage and maintain the organization's network infrastructure and security.</td>
                    </tr>
                    <!-- Jobs Salary Range -->
                    <tr>
                        <th>Salary Range</th>
                        <td>$70,000 - $90,000 per year</td>
                    </tr>
                    <!-- Person that successful applicant report to -->
                    <tr>
                        <th>Reporting to</th>
                        <td>IT Manager</td>
                    </tr>
                    <!-- Jobs Key Responsibilities -->
                    <tr>
                        <th>Key Responsibilities</th>
                        <td>
                            <ol>
                                <li>Design, implement, and manage network configurations and architecture.</li>
                                <li>Monitor network performance and ensure efficient operation.</li>
                                <li>Identify and resolve network issues, both hardware and software.</li>
                                <li>Implement and maintain network security protocols and firewalls.</li>
                                <li>Collaborate with IT teams to plan and execute network upgrades.</li>
                            </ol>
                        </td>
                    </tr>
                    <!-- Jobs Requirements -->
                    <tr>
                        <th>Required</th>
                        <td>
                            <ul>
                                <li>Bachelor's degree in Computer Science or related field.</li>
                                <li>Proficiency in Java and Python programming.</li>
                                <li>2+ years of software development experience.</li>
                                <li>Familiarity with web development frameworks.(Optional)</li>
                                <li>Knowledge of version control systems like Git.(Optional)</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <a href="apply.html" class="apply-button"> Apply Now </a>
            </section>
            <!-- Set a container for Cyber Security Analyst desription -->
            <section class = "job-listing">
                <h3>Cyber Security Analyst</h3>
                <p>Join our team as a Cyber Security Analyst</p>
                <h4>Position Description:</h4>
                <table>
                    <!-- Jobs Reference Number -->
                    <tr>
                        <th>Reference Number</th>
                        <td>00011</td>
                    </tr>
                    <!-- Jobs Brief Description -->
                    <tr>
                        <th>Brief Description</th>
                        <td>Monitor and enhance the organization's cybersecurity infrastructure and respond to security incidents.</td>
                    </tr>
                    <!-- Jobs Salary Range -->
                    <tr>
                        <th>Salary Range</th>
                        <td>$70,000 - $90,000 per year</td>
                    </tr>
                    <!-- Person that successful applicant report to -->
                    <tr>
                        <th>Reporting to</th>
                        <td>Cyber Security Manager</td>
                    </tr>
                    <!-- Jobs Key Responsibilities -->
                    <tr>
                        <th>Key Responsibilities</th>
                        <td>
                            <ol>
                                <li>Analyze security systems and provide recommendations for improvements.</li>
                                <li>Monitor network traffic for potential security breaches.</li>
                                <li>Investigate security incidents and implement incident response measures.</li>
                                <li>Conduct vulnerability assessments and penetration testing.</li>
                                <li>Collaborate with IT teams to ensure compliance with security policies.</li>
                            </ol> 
                        </td>
                    </tr>
                    <!-- Jobs Requirements -->
                    <tr>
                        <th>Required</th>
                        <td>
                            <ul>
                                <li>Bachelor's degree in Cybersecurity, Information Technology, or related field.</li>
                                <li>Knowledge of cybersecurity principles and technologies</li>
                                <li>2+ years of experience in cybersecurity analysis.</li>
                                <li>Certifications such as CompTIA Security+, Certified Information Systems Security Professional (CISSP), or Certified Ethical Hacker (CEH).(Optional)</li>
                                <li>Familiarity with security tools like intrusion detection systems and firewalls.(Optional)</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <a href="apply.html" class="apply-button"> Apply Now </a>
            </section>
            <!-- Set a container for IT Project Manager desription -->
            <section class = "job-listing">
                <h3>IT Project Manager</h3>
                <p>Join our team as a IT Project Manager</p>
                <h4>Position Description:</h4>
                    <table>
                    <!-- Jobs Reference Number -->
                    <tr>
                        <th>Reference Number</th>
                        <td>00100</td>
                    </tr>
                    <!-- Jobs Brief Description -->
                    <tr>
                        <th>Brief Description</th>
                        <td>Plan, execute, and oversee IT projects, ensuring successful delivery and stakeholder satisfaction.</td>
                    </tr>
                    <!-- Jobs Salary Range -->
                    <tr>
                        <th>Salary Range</th>
                        <td>$80,000 - $100,000 per year</td>
                    </tr>
                    <!-- Person that successful applicant report to -->
                    <tr>
                        <th>Reporting to</th>
                        <td>Lead Software Developer</td>
                    </tr>
                    <!-- Jobs Key Responsibilities -->
                    <tr>
                        <th>Key Responsibilities</th>
                        <td>
                            <ol>
                                <li>Lead the planning, execution, and closure of IT projects, ensuring adherence to scope, schedule, and budget.</li>
                                <li>Collaborate with cross-functional teams to define project objectives, requirements, and deliverables.</li>
                                <li>Monitor project progress, identify risks, and develop mitigation strategies.</li>
                                <li>Manage project resources, including team members, vendors, and external contractors.</li>
                                <li>Facilitate communication between project stakeholders, providing regular updates on project status.</li>
                            </ol> 
                        </td>
                    </tr>
                    <!-- Jobs Requirements -->
                    <tr>
                        <th>Required</th>
                        <td>
                            <ul>
                                <li>Bachelor's degree in Information Technology or related field.</li>
                                <li>Strong understanding of project management methodologies (e.g., Agile, Waterfall).</li>
                                <li>Project Management Professional (PMP) certification.(Optional)</li>
                                <li>Excellent communication and leadership skills.(Optional)</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <a href="apply.html" class="apply-button"> Apply Now </a>
            </section>
            <!-- Set a container for Data Analyst desription -->
            <section class = "job-listing">
                <h3>Data Analyst</h3>
                <p>Join our team as a Data Analyst</p>
                <h4>Position Description:</h4>
                <table>
                    <!-- Jobs Reference Number -->
                    <tr>
                        <th>Reference Number</th>
                        <td>00101</td>
                    </tr>
                    <!-- Jobs Brief Description -->
                    <tr>
                        <th>Brief Description</th>
                        <td>Analyze and interpret complex data sets to provide actionable insights for business decision-making.</td>
                    </tr>
                    <!-- Jobs Salary Range -->
                    <tr>
                        <th>Salary Range</th>
                        <td>$50,000 - $70,000 per year</td>
                    </tr>
                    <!-- Person that successful applicant report to -->
                    <tr>
                        <th>Reporting to</th>
                        <td>Data Analytics Manager</td>
                    </tr>
                    <!-- Jobs Key Responsibilities -->
                    <tr>
                        <th>Key Responsibilities</th>
                        <td>
                            <ol>
                                <li>Collect, clean, and preprocess data from various sources.</li>
                                <li>Perform statistical analysis and generate visualizations to present findings.</li>
                                <li>Collaborate with teams to identify data-driven solutions to business challenges.</li>
                                <li>Create and maintain data dashboards and reports.</li>
                            </ol> 
                        </td>
                    </tr>
                    <!-- Jobs Requirements -->
                    <tr>
                        <th>Required</th>
                        <td>
                            <ul>
                                <li>Bachelor's degree in Statistics, Mathematics, or related field.</li>
                                <li>Proficiency in data analysis tools such as Python, R, or SQL.</li>
                                <li>2+ years of experience in data analysis or related role.</li>
                                <li>Familiarity with data visualization tools like Tableau or Power BI.(Optional)</li>
                                <li>Knowledge of machine learning concepts.(Optional)</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <a href="apply.html" class="apply-button"> Apply Now </a>
            </section>
        </section>
    </main>
    <!-- Developer: Viet Hoang Pham. This is the HTML Codes of Footer -->
    <?php include 'footer.inc';?>
</body>
</html>