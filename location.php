<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("head.php"); ?>
	<title>myAASTU - Location</title>
</head>

<body>
	<?php include('nav.php'); ?>
	<!-- main body -->
	<main class="container">
		<h1>Location</h1>
		<p>This page of the website will be presenting the overall campus plan with some discription about buildings and offices within them.
		</p>
		<div class="info">
			<p>
				<b>Notice:</b> Due to lack of organized data we could not present all information needed but we
				will update this page as soon as we find additional information
			</p>
			<h3 style="color: dodgerblue;">You can click on or hover over the following image to identify places</h3>
		</div>
		<img src="AREA.bmp" usemap="#image-map" class="location-img">
		<map name="image-map">
			<area title="UNDERCONSTRUCTION OR NO DETAILS YET" href="" shape="poly"
				coords="414,89,451,69,539,74,624,93,751,112,849,149,941,206,954,245,953,341,949,505,887,536,765,530,609,527,422,495,209,418,133,384,290,267,351,283,418,298,466,313,506,319,623,342,654,289,691,281,725,276,713,241,682,178,653,143,565,105"
				target="" alt="UNDERCONSTRUCTION OR NO DETAILS YET">
			<area title="Dormiteries" href="#a" shape="poly" coords="411,112,457,121,283,250,164,339,110,302,391,125"
				target="" alt="Dormiteries">
			<area title="Libaries" href="#e" shape="poly" coords="482,143,518,156,452,233,393,219" target=""
				alt="Liberiaries">
			<area title="LT" href="#f" shape="poly" coords="499,126,507,117,540,121,540,128" target="" alt="LT">
			<area title="Class Rooms" href="#g" shape="poly"
				coords="501,190,475,226,541,243,541,222,518,217,520,192,510,192" target="" alt="class Rooms">
			<area title="Adminstrative and registeral" href="#h" shape="poly" coords="507,188,529,190,548,161,534,155"
				target="" alt="Adminstrative and registeral">
			<area title="Sport fields" href="" shape="poly" coords="359,103,399,111,349,146,299,134" target=""
				alt="Sport fields">
			<area title="TULU DIMTU exit" href="" shape="rect" coords="414,87,396,104" target="" alt="TULU DIMTU exit">
			<area title="University cafiteria" href="#d" shape="poly"
				coords="305,254,323,238,365,245,397,256,421,262,401,287,332,271" target="" alt="University cafiteria">
			<area title="Collages and Departments" href="#b" shape="poly"
				coords="569,131,580,118,621,136,647,164,659,197,685,249,693,268,657,272,601,262,566,252,551,246,553,215,535,203,553,180,577,175,589,160"
				target="" alt="Collages and Departments">
			<area title="KK" href="#c" shape="poly" coords="343,228,354,219,382,232,370,241" target="" alt="KK">
			<area title="Teachers lounge" href="#c" shape="poly" coords="469,125,487,127,473,149,449,141" target=""
				alt="Teachers lounge">
			<area title="Kibnesh lounge" href="#C" shape="circle" coords="397,196,12" target="" alt="Kibnesh lounge">
			<area title="A+ lounge" href="#c" shape="circle" coords="537,113,9" target="" alt="A+ lounge">
			<area title="Sport fields" href="" shape="poly" coords="459,242,422,286,618,329,628,292,544,263" target=""
				alt="Sport fields">
		</map>
		<div>
			<a href="#a">Block 1-15</a><br>
			<a href="#c">Block 41-43, 49 and 52-53</a><br>
			<a href="#d">Block 35-37</a><br>
			<a href="#e">Block 44-46</a><br>
			<a href="#f">Block 47-51</a><br>
            <a href="#y">Block 54-56</a><br>
			<a href="#g">Block 57-59</a><br>
			<a href="#h">Block 61-62</a><br>
			<a href="#b">Block 63-80 </a><br>
		</div>
		<h2 id="a">Dormitories for students and Stuff members(1-15)</h2>
		<details>	<p><summary>This buildings on campus are all dormiteries for students and other employees</summary>
            <ul>
                <li>
                    BLock 1- Used by the stuff and other employees
                </li>
			</ul>
		</p>
        </details>
		<h2 id="b">Collages and Departments(63-80)</h2>
	<details>	<p><summary>This buildings on campus are all offices for department heads,lectures and other office workers there are
			also some laboratories on this buildings.</summary>
            <ul>
                <li>
                    Block 63- College of Architecture and Civil Engineering
                </li>
			<li>
				Block 64- Electrical and Mechanical College
			</li>
			
            <li>
				Block 71- College of Applied Science
			</li>
            <li>
				Block 73-College of Biology 
			</li>
            <li>
				Block 80-College of Science 
			</li>
        </ul>
    </p>
    </details>	
		<h2 id="c">Lounges Block (41-43, 49 and 52-53)</h2>
		<details><ul>
			<li>
				Block 41- <a href="product.html#KK">KK lounge green</a>
			</li>
			<li>
				Block 42- <a href="product.html#JK">KK lounge yellow</a>
			</li>
			<li>
				Block 43- <a href="product.html#JK">Kibnesh lounge</a>
			</li>
            <li>
				Block 49-Consumer Cafe 
			</li>
			<li>
				Block 52- <a href="product.html#JK">A+ lounge</a>
			</li>
			<li>
				Block 53- <a href="product.html#TL">Teachers lounge</a>
			</li>
		</ul>
        
    </details>
	<h2 id="d">University Cafiteria(35-37)</h2>
    <p>These blocks are the university cafiteria where the university serves food for students. </p> 
		<h2 id="e">Libaries(44-46)</h2>
    <details><p><summary>These blocks are the university libaries where students can find any book(online or physically) conserning
			their acadamics.</summary>
		<ul>
			<li>
				Block 44- Engineering libary
			</li>
			<li>
				Block 45- Applied libary and ICT Directorate
			</li>
			<li>
				Block 46- Under Construction
			</li>
		</ul>
		</p></details>
		<h2 id="f">Lecture Theatres(47-51)</h2>
		<details><summary><p>
			These blocks are Lecture Theatres where students attend their lectures in a more interesting and free way.
			they are also used for organizing events if nessesary
		</p></summary></details>
		<h2 id="g">Class Rooms(57-59)</h2>
		<p>
			These blocks are class rooms where students attend their lectures.
		</p>
		<h2 id="h">Adminstrative and Registeral(61-62)</h2>
		<details><summary><p>These blocks are the universities main office buildings holding offices of very important people on
			campus.</summary>
		</p>
		<ul>
			<li>
				<h3>Block 61 - Registeral building</h3>
				<p>
					This building holds the bank, registeral offices where students can register every semister, IT
					laboratories and other main offices.
                    <ul>
                        <li>Ground floor</li>
                            <ul><li>Registrar </li>
                                <li>Bank and ATM </li>
                            </ul>
                        <li>First floor</li>
                              <ul>
                                                  	<li>112-External Auditors		</li>
                                                  	<li>104 and 105-Ethical and anti-corruption experts 		</li>
                                                  	<li>106- Directorate of Ethics and Anti-Corruption		</li>
                                                  	<li>108- Series and Distance Directorate		</li>
                                                </ul> 
                        <li>Second floor</li>
                            <ul>
                                <li> 202-	Technology Transfer Directorate			</li>
                                	<li>206-Community Service Directorate		</li>
                                
                                	<li>216-Personnel Development Center Directorate		</li>
                                <li>213-Institutional Change and Good Governance Directorate		</li>
                                <li>212-Experts in the Directorate of Institutional Change and Good Governance		</li>
                            </ul>
                        <li>Third floor</li>
                            <ul><li>304-Institutional Quality Assurance and Enhancement Directorate			</li>
                        
                            </ul>
                                            </ul>
                                           




				</p>
			</li>
			<li>
				<h3>Block 62- Adminsteral building</h3>
				<p>
					This building holds all the adminstrative offices including the presidents office.
                    <ul>
                      <li>Ground floor</li>
                          <ul><li>financial Management directore</li>
                            <li>Bid Opening Hall</li>
                          </ul>
                      <li>First floor</li>
                            <ul><li>109-Management issues vice president office</li>
                                      <li>118-Procurement Service Directorate</li>
                                          <li>107-Purchasing Department	</li>
                                            <li> 112-Directorate of Research Directorate of Resource Development and Revenue Collection Team </li>
                                                <li> 114-Procurement Approval Committee Office			</li>
                                          </ul> 
                    <li>Second floor</li>
                            <ul>
                                            <li>119	Registry 2			</li>
                                                <li> 106-Market Research and Contract Management Bureau</li>
                                                    <li> 205-Academic issues vice president office	</li>
                                                        <li>209-Academic issues vice president office	</li>
                                                            <li>208-Pre-Graduate Program Directorate		</li>
                                                                <li>209-Postgraduate Program Directorate	</li>
                                                                    <li>218-Research and Transfer Technology vice president office	</li>
                                                                    <li>217-Research Directorate		</li>
                                                                    <li>214-University Industry Connection			</li>
                                          </ul>
                            <li>Third floor</li>
                                          <ul>
                                            <li>316- President office		</li>
                                                <li> 305-Director of the Office of the President		</li>
                                                    <li>   314-     Directorate of Legal Affairs		</li>
                                                        <li> 	312- Career services center	</li>
                                                            <li>308- Planning and Budget Directorate		</li>
                                                                <li>304-Public and International Relations Directorate		</li>
                                                                    <li>307-Department of External Relations Cooperation		</li>
                                                                        <li> 306-Department of Law Professionals		  </li>
                                                        </ul> 
                                             <li>Forth floor</li>
                                                        <ul>
                                                            <li>  Institutional Development and Business Office</li>
                                                                <li>  Construction Project</li>
                                                                      </ul>  	
                                          			
                                          
                                          
                        
                        
                        
                        
                        <ul>
            
				</p>
			</li>
		</ul>
		</p>
    </details>

            
                 <h2 id="y">Other Main Offices(54-56)</h2>
                 <details><p><summary>This buildings on campus are other main offices present on the campus</summary>
			<ul>
                <li>Block 54</li>
                   <ul>
                    <li>Ground floor </li>
                       <ul>
                        <li>Clinic and injection room </li>
                        
                      </ul>
                     <li>Second floor </li>
                       <ul>
                        <li>Student Counseling</li>
                        <li>Student Services Directorate</li>
                      </ul>
                      <li>Third floor </li>
                       <ul>
                        <li>301- Student Discipline Team Leader</li>
                        <li>302- Sports and Recreation Office</li>
                        <li>305- Directorate of Women, Children and Youth Affairs</li>
                        <li>311- Sports and Club Work Room</li>
                      </ul>
                      
                      
                       


                     </ul>
                <li>Block 55</li>
                <ul><li>Ground  floor </li>
                    <ul>
                        <li>02-Facility Operation Maintenance Directorate</li>
                        <li>05-Department of Multiple Repair Specialists</li>
                        <li>04-Water Supply and Generator Expert</li>
                        <li>03-Electric Team Leader</li>
                   </ul>
                   <li>First  floor </li>
                   <ul>
                       <li>104-Human Resource Management Directorate</li>
                       <li>101-Experts in the Human Resource Management Directorate</li>
                       <li>102-School Training Team Leader</li>
                  </ul>
                
                  </ul>
                <li> Block 56</li>
                  <ul>
                    <li>Ground floor-General Service Directorate </li>
                    
                  </ul>
            </ul>
		</p></details>
	</main>
	<?php include('footer.php'); ?>
</body>

</html>
