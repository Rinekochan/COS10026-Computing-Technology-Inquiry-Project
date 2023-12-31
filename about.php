<!--
    Name/ID: Parthasarathi Jayaprakash 104362982
    Assignment 1
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta name = "description" content = "This is the About Us Page of the HPM Company">
    <meta name = "keywords" content = "AboutHPM">
    <!--The Developer of this page is Parthasarathi Jayaprakash.--> 
    <meta name = "author" content = "Parthasarathi Jayaprakash">
    <title>HPM: About Us</title>
    <!-- This .inc file includes all css locations for each resolution of devices -->
    <?php include_once 'cssfiles.inc';?>
    <link rel = "shortcut icon" href="images/favicon.png">
</head>
<body id = "MainBackground">
    <!--Developer: Viet Hoang Pham. This is Navigation Menu code. You should add this at the start of <body> element-->
    <?php include_once 'header.inc';?>
    <!--End of Navigation Menu Code.-->
    
    <!--Developer: Viet Hoang Pham. Scroll Up Button-->
    <?php include_once 'scrollupbutton.inc';?>
    <!-- End of Scroll up Button -->

    <!--Developer : Parthasarathi Jayaprakash. This is the about page.-->
    <main>
        <h1 id = "AboutHeader"> About Us</h1>
        <div id = "GroupNameAbout"> 
            <dl>
                <dt>Group Name:</dt>
                <dd>HPM</dd>
                <dt>Group ID:</dt>
                <dd>Group 4</dd>
                <dt>Tutors Name:</dt>
                <dd>Fatma Mohammed </dd>
                <dt>Course Name:</dt>
                <dd>Bachelor of Computer Science</dd>
            </dl>
            <figure>
                <img src="images/OrginalGroupphoto.jpeg" alt="HPM Group Photo" id = "GroupPhotoAbout" >
                <figcaption>HPM stands for Hoang, Prem, Parthasarathi and Humayra</figcaption>
            </figure>
        </div>
        <div id = "DemographicAbout">
            <!-- MemberInfo Container -->
            <div class = "memberInfo">
                <img src = "images/Henry.png" alt="Viet Hoang Pham Photo" class = "MemberImageSize">
                <article>
                    <h2>Leader</h2>
                    <!-- Member Informations -->
                    <h3>Informations</h3>
                    <p>I'm <strong> Viet Hoang Pham (Henry)</strong>, the leader of the <em>HPM team</em> and a first year student studying<strong> 
                        Bachelors of Computer Science(Major- Artificial Intelligence)</strong> at Swinburne University of Technology.
                    </p>
                    <hr>
                    <!-- Member Hometown -->
                    <h3>Hometown</h3>
                    <p>I am from <strong>Vietnam</strong>, a lovely place that consists of nice people (like me). 
                        Vietnam is a long, narrow nation shaped like the letter S. 
                        It is in <strong>Southeast Asia</strong> on the eastern edge of the peninsula known as Indochina. 
                        My hometown is <strong>Vung Tau</strong>, a economic centre of in southeastern Vietnam. The city centre, 
                        located on the southern tip of the peninsula, has been long known as a tourist heaven for business people.
                    </p>
                    <hr>
                    <!-- Member Hobby -->
                    <h3>Hobby</h3>
                    <p>I love reading manga and listening to J-Pop and EDM Music. </p>
                    <hr>
                    <!-- Member Experiences -->
                    <h3>Experiences</h3>
                    <p>
                        I've been using <strong>C++</strong> in <strong>Competitive Programming</strong> for 3 years
                        and received numerous awards in <strong>Competitive Programming</strong>.
                    </p>
                </article>
            </div>
            <!-- MemberInfo Container -->
            <div class = "memberInfo">
                <img src = "images/prem.jpeg" alt="Siradanai Inchansuk photo" class = "MemberImageSize">
                <article>
                    <h2>Member</h2>
                    <!-- Member Informations -->
                    <h3>Informations</h3>
                    <p>I'm<strong> Siradanai Inchansuk (Prem)</strong>, studying Bachelors of <strong>Computer science(Major- Internet of things)</strong> and a
                    first year student at Swinburne University of Technology . </p>
                    <hr>
                    <!-- Member Hometown -->
                    <h3>Hometown</h3>
                    <p>I am from <strong> Thailand</strong> and I live on the outskirts of <strong>Bangkok</strong>. Thailand is in <strong>South East Asia</strong> and Thai people would say that the country looks like an axe. 
                    There are a lot of temples, called “wats” in thailand, as most people believe in buddhism.</p>
                    <hr>
                    <!-- Member Hobby -->
                    <h3>Hobby</h3>
                    <p>My hobby is primary playing video games and watching youtube</p>
                    <hr>
                    <!-- Member Experiences -->
                    <h3>Experiences</h3>
                    <p>The primary language I write is <strong>C#</strong> and I have experienced Web development and written an AI.</p>
                </article>
            </div>
            <!-- MemberInfo Container -->
            <div class = "memberInfo">
                <img src = "images/Parthan.jpeg" alt="Parthasarathi Jayaprakash photo" class = "MemberImageSize">
                <article>
                    <h2> Member</h2>
                    <!-- Member Informations -->
                    <h3>Informations</h3>
                    <p>I'm <strong>Parthasarathi Jayaprakash</strong>, studying <strong>Bachelor of Computer Science(Major- Software development)</strong> in <strong>Swinburne university of technology</strong>.</p>
                    <hr>
                    <!-- Member Hometown -->
                    <h3>Hometown</h3>
                    <p>My homeland is <strong>India</strong>, where its beauty lies in diveristy and cultures.India, a country known for its diverse culture and rich history, 
                    is also a land of unparalleled natural beauty. My hometown is <strong>Kerala</strong>. Kerala is a state located in the southern part of India. 
                    It is known for its beautiful beaches, backwater tourist destinations, and vibrant culture. Kerala is also known for its Ayurveda treatments and traditional arts, 
                    such as Kathakali and Mohiniyattam dance forms.</p>
                    <hr>
                    <!-- Member Hobby -->
                    <h3>Hobby</h3>
                    <p>My hobbies are watching series and anime. My favorite series is the walking dead and anime is blue exorcist. 
                    I like to learn new things and I am here to strengthen my skills.</p>
                    <hr>
                    <!-- Member Experiences -->
                    <h3>Experiences</h3>
                    <p>I have learned <strong> PHP</strong> and <strong>JavaScript</strong> for the last 2 years, so I have a little experience in coding. </p>
                </article>
            </div>
            <!-- MemberInfo Container -->
            <div class = "memberInfo">
                <img src = "images/Humariya.jpeg" alt="Humayra Jahan photo" class = "MemberImageSize">
                <article>
                    <h2> Member</h2>
                    <!-- Member Informations -->
                    <h3>Informations</h3>
                    <p>My name is <strong>Humayra Jahan</strong>, a member of the <strong>HPM</strong> team and a student studying <strong>Bachelor's of Computer Science-Software Development</strong>
                    at <strong> Swinburne University of Technology</strong>.</p>
                    <hr>
                    <!-- Member Hometown -->
                    <h3>Hometown</h3>
                    <p>My homeland is <strong> Bangladesh</strong>, a beautiful and multicultural country. 
                    And<strong> Sylhet</strong> is my hometown, a place filled with scenic beauty and tea gardens.</p> 
                    <hr>
                    <!-- Member Hobby -->
                    <h3>Hobby</h3>
                    <p> I have a lot of hobbies but most of the time I spend my leisure time 
                    watching movies and listening to all sorts of music. And I also like to read manga & manhwa.</p>
                    <hr>
                    <!-- Member Experiences -->
                    <h3>Experiences</h3>
                    <p>As I am new to this industry, I am still learning and trying to sharpen my skills.</p>
                </article>
            </div>
        </div>
        <section id = "timetable">
            <h2>Our Timetable</h2>
            <!-- Table Header -->
            <table>
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- First Table Row -->
                    <tr>
                        <td>8:30 to 10:30</td>
                        <td>Computer Technology Inquiry Project</td>
                        <td></td>
                        <td>Introduction to Programming</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- Second Table Row -->
                    <tr>
                        <td>10:30 to 12:30 </td>
                        <td></td>
                        <td>Introduction to Programming</td>
                        <td>Computer Technology Inquiry Project</td>
                        <td>Computer Technology Inquiry Project</td>
                        <td></td>
                    </tr>
                    <!-- Third Table Row -->
                    <tr>
                        <td>12:30 to 14:30 </td>
                        <td>Network and Switching</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- Forth Table Row -->
                    <tr>
                        <td>14:30 to 15:30 </td>
                        <td>Computer System</td>
                        <td></td>
                        <td></td>
                        <td>Network and Switching</td>
                        <td></td>
                    </tr>
                    <!-- Fifth Table Row -->
                    <tr>
                        <td>16:30 to 18:30 </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Computer System</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="team-section">
            <!-- Team Member Contact -->
            <h2>Contact</h2>
            <div>
                <article class="team-member">
                    <img src="images/Henry.png" alt="Member 1">
                    <h3> Viet Hoang Pham </h3>
                    <p>Facebook: <a href="https://www.facebook.com/VietHoang.Ph/">@Hoang Viet</a></p>
                </article>
                <article class="team-member">
                    <img src="images/Parthan.jpeg" alt="Member 2">
                    <h3>Parthasarathi Jayaprakash</h3>
                    <p>Instagram: <a href="https://www.instagram.com/__p.a.r.t.h.a.n_">@Parthasarathi</a></p>
                </article>
                <article class="team-member">
                    <img src="images/prem.jpeg" alt="Member 3">
                    <h3>Siradanai Inchansuk</h3>
                    <p>Discord: <a href="https://www.discordapp.com/users/realprem">@realprem</a></p>
                </article>
                <article class="team-member">
                    <img src="images/Humariya.jpeg" alt="Member 4">
                    <h3>Humayra Jahan</h3>
                    <p>Instagram: <a href="https://www.instagram.com/humayra.az">@Humayra Jahan</a></p>
                </article>
            </div>
            <hr>
            <p>Contact: <a href="mailto:104506968@student.swin.edu.au">104506968@student.swin.edu.au</a></p>
        </section>
    </main>
    <!-- Developer: Viet Hoang Pham. This is the HTML Codes of Footer -->
    <?php include_once 'footer.inc';?>
    
</body>
</html>
