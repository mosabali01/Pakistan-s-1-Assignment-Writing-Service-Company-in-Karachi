<?php
include 'includes/header.php';
$page = 'Order Now';
?>
<main>



    <section class="order-now">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                        <form action="process_order.php" method="post">                        
                            <h1 class="pb-3">Place Your Order</h1>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                    <p class="form-hed text-dark pb-1 ms-2">Paper Type <span
                                            class="text-danger">*</span></p>
                                    <div class="input-group mb-4">
                                        <select class="form-select" id="paper_type" name="paper_type">
                                            <option value="Essay" selected="selected">Essay</option>
                                            <option value="Term paper">Term paper</option>
                                            <option value="Research paper">Research paper</option>
                                            <option value="Course Work">Course Work</option>
                                            <option value="Thesis">Thesis</option>
                                            <option value="Thesis Proposal">Thesis Proposal</option>
                                            <option value="Assignment">Assignment</option>
                                            <option value="Exposition Writing">Exposition Writing</option>
                                            <option value="Critical analysis">Critical analysis</option>
                                            <option value="Reflection paper">Reflection paper</option>
                                            <option value="Reflective Essay">Reflective Essay</option>
                                            <option value="Analytical Essay">Analytical Essay</option>
                                            <option value="Brief Overview">Brief Overview</option>
                                            <option value="Response Essay">Response Essay</option>
                                            <option value="Response paper">Response paper</option>
                                            <option value="Argumentative Essay">Argumentative Essay</option>
                                            <option value="Contrast Essay">Contrast Essay</option>
                                            <option value="Research Essay">Research Essay</option>
                                            <option value="Literature Review">Literature Review</option>
                                            <option value="Dissertation">Dissertation</option>
                                            <option value="Dissertation Chapter - Abstract">Dissertation Chapter -
                                                Abstract
                                            </option>
                                            <option value="Dissertation Chapter - Introduction">Dissertation Chapter -
                                                Introduction Chapter</option>
                                            <option value="Dissertation Chapter - Literature Review">Dissertation
                                                Chapter -
                                                Literature Review</option>
                                            <option value="Dissertation Chapter - Methodology">Dissertation Chapter -
                                                Methodology</option>
                                            <option value="Dissertation Chapter - Result">Dissertation Chapter - Result
                                            </option>
                                            <option value="Dissertation Chapter - Discussion">Dissertation Chapter -
                                                Discussion
                                            </option>
                                            <option value="Capstone Project">Capstone Project</option>
                                            <option value="Dissertation Chapter">Dissertation Chapter</option>
                                            <option value="Reflective Writing">Reflective Writing</option>
                                            <option value="Report">Report</option>
                                            <option value="Proofreading">Proofreading</option>
                                            <option value="Lab Report">Lab Report</option>
                                            <option value="PowerPoint Presentation">PowerPoint Presentation</option>
                                            <option value="Reaction Paper">Reaction Paper</option>
                                            <option value="Rewriting">Rewriting</option>
                                            <option value="Press Release">Press Release</option>
                                            <option value="Statement of Purpose">Statement of Purpose</option>
                                            <option value="Letter of Recommendation">Letter of Recommendation</option>
                                            <option value="Project">Project</option>
                                            <option value="Book Report">Book Report</option>
                                            <option value="Book Review">Book Review</option>
                                            <option value="Movie Review">Movie Review</option>
                                            <option value="Research Proposal">Research Proposal</option>
                                            <option value="Case Study">Case Study</option>
                                            <option value="Article">Article</option>
                                            <option value="Article Critique">Article Critique</option>
                                            <option value="Annotated Bibliography">Annotated Bibliography</option>
                                            <option value="Speech / Presentation">Speech / Presentation</option>
                                            <option value="Power Point Presentation (without speaker notes)">Power Point
                                                Presentation (without speaker notes)</option>
                                            <option value="Power Point Presentation (with speaker notes)">Power Point
                                                Presentation (with speaker notes)</option>
                                            <option value="Admission Essays">Admission Essays</option>
                                            <option value="Admission Services - Editing">Admission Services - Editing
                                            </option>
                                            <option value="Scholarship Essay">Scholarship Essay</option>
                                            <option value="Personal Statement">Personal Statement</option>
                                            <option value="News Release">News Release</option>
                                            <option value="Biography">Biography</option>
                                            <option value="Business Plan">Business Plan</option>
                                            <option value="EBooks">EBooks</option>
                                            <option value="Editing">Editing</option>
                                            <option value="Formatting">Formatting</option>
                                            <option value="Quiz">Quiz</option>
                                            <option value="Multiple Choice Questions (Non Time Framed)">Multiple Choice
                                                Questions (Non Time Framed)</option>
                                            <option value="Multiple Choice Questions (Time Framed)">Multiple Choice
                                                Questions
                                                (Time Framed)</option>
                                            <option value="Math Problem">Math Problem</option>
                                            <option value="Paraphrasing">Paraphrasing</option>
                                            <option value="Resume">Resume</option>
                                            <option value="Cover Letter">Cover Letter</option>
                                            <option value="Poster">Poster</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <p class="form-hed text-dark pb-1 ms-2">Academic Level <span
                                            class="text-danger">*</span>
                                    </p>
                                    <div class="input-group mb-4">
                                        <select class="form-select" id="academic_level" name="academic_level">
                                            <option selected>Paper Select</option>
                                            <option value="Undergraduate" selected="selected">Undergraduate</option>
                                            <option value="Masters">Masters</option>
                                            <option value="Mphil / Ph.D">Mphil / Ph.D</option>
                                        </select>
                                    </div>
                                    <p class="form-hed text-dark pb-1 ms-2">Topic / Title <span
                                            class="text-danger">*</span></p>
                                    <div class="input-group mb-4">
                                        <input type="text" id="topic_title" name="topic_title" placeholder="Topic / Title" class="form-control"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="form-hed text-dark pb-1 ms-2">Deadlines<span
                                                    class="text-danger">*</span>
                                            </p>
                                            <div class="input-group mb-4">
                                                <select class="form-select" id="deadlines" name="deadlines">
                                                    <option value="15 Days +" data-deadline="dd1" selected="selected">15
                                                        Days +
                                                    </option>
                                                    <option value="10 Days" data-deadline="dd2">10 Days</option>
                                                    <option value="8 Days" data-deadline="dd3">8 Days</option>
                                                    <option value="6 Days" data-deadline="dd4">6 Days</option>
                                                    <option value="5 Days" data-deadline="dd5">5 Days</option>
                                                    <option value="4 Days" data-deadline="dd6">4 Days</option>
                                                    <option value="3 Days" data-deadline="dd7">3 Days</option>
                                                    <option value="48 Hours" data-deadline="dd8">48 Hours</option>
                                                    <option value="24 Hours" data-deadline="dd9">24 Hours</option>
                                                    <option value="12 Hours" data-deadline="dd10">12 Hours</option>
                                                    <option value="6 Hours" data-deadline="dd11">6 Hours</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="form-hed text-dark pb-1 ms-2">No. Of Pages<span
                                                    class="text-danger">*</span></p>
                                            <div class="input-group mb-4">
                                                <select class="form-select" id="num_of_pages" name="num_of_pages">
                                                    <option value="1 Page / 250 Words" data-page="1">1 Page / 250 Words</option>
                                                        <option value="2 Pages / 500 Words" data-page="2">2 Pages / 500 Words</option>
                                                        <option value="3 Pages / 750 Words" data-page="3">3 Pages / 750 Words</option>
                                                        <option value="4 Pages / 1000 Words" data-page="4">4 Pages / 1000 Words</option>
                                                        <option value="5 Pages / 1250 Words" data-page="5">5 Pages / 1250 Words</option>
                                                        <option value="6 Pages / 1500 Words" data-page="6">6 Pages / 1500 Words</option>
                                                        <option value="7 Pages / 1750 Words" data-page="7">7 Pages / 1750 Words</option>
                                                        <option value="8 Pages / 2000 Words" data-page="8">8 Pages / 2000 Words</option>
                                                        <option value="9 Pages / 2250 Words" data-page="9">9 Pages / 2250 Words</option>
                                                        <option value="10 Pages / 2500 Words" data-page="10">10 Pages / 2500 Words</option>
                                                        <option value="11 Pages / 2750 Words" data-page="11">11 Pages / 2750 Words</option>
                                                        <option value="12 Pages / 3000 Words" data-page="12">12 Pages / 3000 Words</option>
                                                        <option value="13 Pages / 3250 Words" data-page="13">13 Pages / 3250 Words</option>
                                                        <option value="14 Pages / 3500 Words" data-page="14">14 Pages / 3500 Words</option>
                                                        <option value="15 Pages / 3750 Words" data-page="15">15 Pages / 3750 Words</option>
                                                        <option value="16 Pages / 4000 Words" data-page="16">16 Pages / 4000 Words</option>
                                                        <option value="17 Pages / 4250 Words" data-page="17">17 Pages / 4250 Words</option>
                                                        <option value="18 Pages / 4500 Words" data-page="18">18 Pages / 4500 Words</option>
                                                        <option value="19 Pages / 4750 Words" data-page="19">19 Pages / 4750 Words</option>
                                                        <option value="20 Pages / 5000 Words" data-page="20">20 Pages / 5000 Words</option>
                                                        <option value="21 Pages / 5250 Words" data-page="21">21 Pages / 5250 Words</option>
                                                        <option value="22 Pages / 5500 Words" data-page="22">22 Pages / 5500 Words</option>
                                                        <option value="23 Pages / 5750 Words" data-page="23">23 Pages / 5750 Words</option>
                                                        <option value="24 Pages / 6000 Words" data-page="24">24 Pages / 6000 Words</option>
                                                        <option value="25 Pages / 6250 Words" data-page="25">25 Pages / 6250 Words</option>
                                                        <option value="26 Pages / 6500 Words" data-page="26">26 Pages / 6500 Words</option>
                                                        <option value="27 Pages / 6750 Words" data-page="27">27 Pages / 6750 Words</option>
                                                        <option value="28 Pages / 7000 Words" data-page="28">28 Pages / 7000 Words</option>
                                                        <option value="29 Pages / 7250 Words" data-page="29">29 Pages / 7250 Words</option>
                                                        <option value="30 Pages / 7500 Words" data-page="30">30 Pages / 7500 Words</option>
                                                        <option value="31 Pages / 7750 Words" data-page="31">31 Pages / 7750 Words</option>
                                                        <option value="32 Pages / 8000 Words" data-page="32">32 Pages / 8000 Words</option>
                                                        <option value="33 Pages / 8250 Words" data-page="33">33 Pages / 8250 Words</option>
                                                        <option value="34 Pages / 8500 Words" data-page="34">34 Pages / 8500 Words</option>
                                                        <option value="35 Pages / 8750 Words" data-page="35">35 Pages / 8750 Words</option>
                                                        <option value="36 Pages / 9000 Words" data-page="36">36 Pages / 9000 Words</option>
                                                        <option value="37 Pages / 9250 Words" data-page="37">37 Pages / 9250 Words</option>
                                                        <option value="38 Pages / 9500 Words" data-page="38">38 Pages / 9500 Words</option>
                                                        <option value="39 Pages / 9750 Words" data-page="39">39 Pages / 9750 Words</option>
                                                        <option value="40 Pages / 10000 Words" data-page="40">40 Pages / 10000 Words</option>
                                                        <option value="41 Pages / 10250 Words" data-page="41">41 Pages / 10250 Words</option>
                                                        <option value="42 Pages / 10500 Words" data-page="42">42 Pages / 10500 Words</option>
                                                        <option value="43 Pages / 10750 Words" data-page="43">43 Pages / 10750 Words</option>
                                                        <option value="44 Pages / 11000 Words" data-page="44">44 Pages / 11000 Words</option>
                                                        <option value="45 Pages / 11250 Words" data-page="45">45 Pages / 11250 Words</option>
                                                        <option value="46 Pages / 11500 Words" data-page="46">46 Pages / 11500 Words</option>
                                                        <option value="47 Pages / 11750 Words" data-page="47">47 Pages / 11750 Words</option>
                                                        <option value="48 Pages / 12000 Words" data-page="48">48 Pages / 12000 Words</option>
                                                        <option value="49 Pages / 12250 Words" data-page="49">49 Pages / 12250 Words</option>
                                                        <option value="50 Pages / 12500 Words" data-page="50">50 Pages / 12500 Words</option>
                                                        <option value="51 Pages / 12750 Words" data-page="51">51 Pages / 12750 Words</option>
                                                        <option value="52 Pages / 13000 Words" data-page="52">52 Pages / 13000 Words</option>
                                                        <option value="53 Pages / 13250 Words" data-page="53">53 Pages / 13250 Words</option>
                                                        <option value="54 Pages / 13500 Words" data-page="54">54 Pages / 13500 Words</option>
                                                        <option value="55 Pages / 13750 Words" data-page="55">55 Pages / 13750 Words</option>
                                                        <option value="56 Pages / 14000 Words" data-page="56">56 Pages / 14000 Words</option>
                                                        <option value="57 Pages / 14250 Words" data-page="57">57 Pages / 14250 Words</option>
                                                        <option value="58 Pages / 14500 Words" data-page="58">58 Pages / 14500 Words</option>
                                                        <option value="59 Pages / 14750 Words" data-page="59">59 Pages / 14750 Words</option>
                                                        <option value="60 Pages / 15000 Words" data-page="60">60 Pages / 15000 Words</option>
                                                        <option value="61 Pages / 15250 Words" data-page="61">61 Pages / 15250 Words</option>
                                                        <option value="62 Pages / 15500 Words" data-page="62">62 Pages / 15500 Words</option>
                                                        <option value="63 Pages / 15750 Words" data-page="63">63 Pages / 15750 Words</option>
                                                        <option value="64 Pages / 16000 Words" data-page="64">64 Pages / 16000 Words</option>
                                                        <option value="65 Pages / 16250 Words" data-page="65">65 Pages / 16250 Words</option>
                                                        <option value="66 Pages / 16500 Words" data-page="66">66 Pages / 16500 Words</option>
                                                        <option value="67 Pages / 16750 Words" data-page="67">67 Pages / 16750 Words</option>
                                                        <option value="68 Pages / 17000 Words" data-page="68">68 Pages / 17000 Words</option>
                                                        <option value="69 Pages / 17250 Words" data-page="69">69 Pages / 17250 Words</option>
                                                        <option value="70 Pages / 17500 Words" data-page="70">70 Pages / 17500 Words</option>
                                                        <option value="71 Pages / 17750 Words" data-page="71">71 Pages / 17750 Words</option>
                                                        <option value="72 Pages / 18000 Words" data-page="72">72 Pages / 18000 Words</option>
                                                        <option value="73 Pages / 18250 Words" data-page="73">73 Pages / 18250 Words</option>
                                                        <option value="74 Pages / 18500 Words" data-page="74">74 Pages / 18500 Words</option>
                                                        <option value="75 Pages / 18750 Words" data-page="75">75 Pages / 18750 Words</option>
                                                        <option value="76 Pages / 19000 Words" data-page="76">76 Pages / 19000 Words</option>
                                                        <option value="77 Pages / 19250 Words" data-page="77">77 Pages / 19250 Words</option>
                                                        <option value="78 Pages / 19500 Words" data-page="78">78 Pages / 19500 Words</option>
                                                        <option value="79 Pages / 19750 Words" data-page="79">79 Pages / 19750 Words</option>
                                                        <option value="80 Pages / 20000 Words" data-page="80">80 Pages / 20000 Words</option>
                                                        <option value="81 Pages / 20250 Words" data-page="81">81 Pages / 20250 Words</option>
                                                        <option value="82 Pages / 20500 Words" data-page="82">82 Pages / 20500 Words</option>
                                                        <option value="83 Pages / 20750 Words" data-page="83">83 Pages / 20750 Words</option>
                                                        <option value="84 Pages / 21000 Words" data-page="84">84 Pages / 21000 Words</option>
                                                        <option value="85 Pages / 21250 Words" data-page="85">85 Pages / 21250 Words</option>
                                                        <option value="86 Pages / 21500 Words" data-page="86">86 Pages / 21500 Words</option>
                                                        <option value="87 Pages / 21750 Words" data-page="87">87 Pages / 21750 Words</option>
                                                        <option value="88 Pages / 22000 Words" data-page="88">88 Pages / 22000 Words</option>
                                                        <option value="89 Pages / 22250 Words" data-page="89">89 Pages / 22250 Words</option>
                                                        <option value="90 Pages / 22500 Words" data-page="90">90 Pages / 22500 Words</option>
                                                        <option value="91 Pages / 22750 Words" data-page="91">91 Pages / 22750 Words</option>
                                                        <option value="92 Pages / 23000 Words" data-page="92">92 Pages / 23000 Words</option>
                                                        <option value="93 Pages / 23250 Words" data-page="93">93 Pages / 23250 Words</option>
                                                        <option value="94 Pages / 23500 Words" data-page="94">94 Pages / 23500 Words</option>
                                                        <option value="95 Pages / 23750 Words" data-page="95">95 Pages / 23750 Words</option>
                                                        <option value="96 Pages / 24000 Words" data-page="96">96 Pages / 24000 Words</option>
                                                        <option value="97 Pages / 24250 Words" data-page="97">97 Pages / 24250 Words</option>
                                                        <option value="98 Pages / 24500 Words" data-page="98">98 Pages / 24500 Words</option>
                                                        <option value="99 Pages / 24750 Words" data-page="99">99 Pages / 24750 Words</option>
                                                        <option value="100 Pages / 25000 Words" data-page="100">100 Pages / 25000 Words</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <p class="form-hed text-dark pb-1 ms-2">Name <span class="text-danger">*</span></p>
                                    <div class="input-group mb-4">
                                        <input type="text" placeholder="Name" class="form-control" name="name" id="name"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <p class="form-hed text-dark pb-1 ms-2">Email <span class="text-danger">*</span></p>
                                    <div class="input-group mb-4">
                                        <input type="text" placeholder="Email" class="form-control" name="email" id="email"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <p class="form-hed text-dark pb-1 ms-2">Phone <span class="text-danger">*</span></p>
                                    <div class="input-group mb-4">
                                        <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone"
                                            aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                            </div>
                            <p class="form-hed text-dark pb-1 ms-2">Other Instructions:</p>
                            <textarea class="form-control-2" rows="8" name="instructions" id="instructions"
                                aria-label="With textarea" spellcheck="false"></textarea>
                                
                                <p>Total Price: <span id="total_price">0 PKR</span></p>

                                <input class="order-btn" type="submit" name="submit" value="Order Now">
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="cta-live-chat">
                            <span class="h3">Chat Now</span>
                            <p class="pt-3 pb-3">The fastest way to contact us. Chat operators reply in less than 30 seconds.</p>
                            <a href="" class="chat-btn mb-3" style="border-color: #fff; color:#fff;">Live Chat</a>
                        </div>
                        <div class="payment-and-sec">
                            <h3 class="ps">Payment & Security</h3>
                            <img class="img-fluid pt-3" src="images/payment-card.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>
<?php
include 'includes/footer.php';
$page = 'Order Now';
?>



    
<script>
   $(document).ready(function () {
    // Define academic level options for each paper type
    var academicLevelOptions = {
    'Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Term paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Research paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Course Work': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Thesis': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Thesis Proposal': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Assignment': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Exposition Writing': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Critical analysis': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Reflection paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Reflective Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Analytical Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Brief Overview': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Response Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Response paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Argumentative Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Contrast Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Research Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Literature Review': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter - Abstract': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter - Introduction': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter - Literature Review': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter - Methodology': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter - Result': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter - Discussion': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Capstone Project': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Dissertation Chapter': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Reflective Writing': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Report': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Proofreading': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Lab Report': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'PowerPoint Presentation': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Reaction Paper': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Rewriting': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Press Release': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Statement of Purpose': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Letter of Recommendation': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Project': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Book Report': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Book Review': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Movie Review': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Research Proposal': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Case Study': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Article': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Article Critique': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Annotated Bibliography': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Speech / Presentation': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Power Point Presentation (without speaker notes)': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Power Point Presentation (with speaker notes)': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Admission Essays': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Admission Services - Editing': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Scholarship Essay': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Personal Statement': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'News Release': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Biography': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Business Plan': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'EBooks': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Editing': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Formatting': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Quiz': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Multiple Choice Questions (Non Time Framed)': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Multiple Choice Questions (Time Framed)': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Math Problem': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Paraphrasing': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Resume': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Cover Letter': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Poster': ['Undergraduate', 'Masters', 'Mphil / Ph.D'],
    'Other': ['Undergraduate', 'Masters', 'Mphil / Ph.D']
};


    // Populate academic level options on page load
    populateAcademicLevels('Essay');

    // Change event for paper type dropdown
    $('#paper_type').change(function () {
        var selectedPaperType = $(this).val();
        populateAcademicLevels(selectedPaperType);
    });

    // Change event for deadlines and academic level dropdowns
    $('#deadlines, #academic_level').change(function () {
        var selectedDeadline = $('#deadlines').val();
        var selectedAcademicLevel = $('#academic_level').val();

        // Calculate total price based on the selected options
        var totalPrice = calculateTotalPrice(selectedDeadline, selectedAcademicLevel);

        // Update the total price span
        $('#total_price').text(totalPrice + " PKR");
    });

    // Function to populate academic level options
    function populateAcademicLevels(paperType) {
        // Clear existing options
        $('#academic_level').empty();

        // Populate academic level options
        $.each(academicLevelOptions[paperType], function (index, value) {
            $('#academic_level').append($('<option>', {
                value: value,
                text: value
            }));
        });
    }

    // Function to calculate total price based on selected options
    function calculateTotalPrice(deadline, academicLevel) {
        // Implement your pricing logic here...
        // Use the data structure you created in the PHP code to fetch the price

        // For example:
        var prices = {
            "15 Days +": {"Undergraduate": 600, "Masters": 700, "Mphil / Ph.D": 800},
            "10 Days": {"Undergraduate": 700, "Masters": 800, "Mphil / Ph.D": 900},
            "7 Days": {"Undergraduate": 800, "Masters": 900, "Mphil / Ph.D": 1000},
            "6 Days": {"Undergraduate": 1100, "Masters": 1100, "Mphil / Ph.D": 1200},
            "5 Days": {"Undergraduate": 1200, "Masters": 1300, "Mphil / Ph.D": 1400},
            "4 Days": {"Undergraduate": 1300, "Masters": 1400, "Mphil / Ph.D": 1500},
            "3 Days": {"Undergraduate": 1500, "Masters": 1600, "Mphil / Ph.D": 1700},
            "48 Hours": {"Undergraduate": 1700, "Masters": 1800, "Mphil / Ph.D": 1900},
            "24 Hours": {"Undergraduate": 1900, "Masters": 2000, "Mphil / Ph.D": 2100},
            "12 Hours": {"Undergraduate": 2100, "Masters": 2200, "Mphil / Ph.D": 2300},
            "6 Hours": {"Undergraduate": 2300, "Masters": 2400, "Mphil / Ph.D": 2500},
        };

        return prices[deadline][academicLevel];
    }
});

</script>


<style>
    /* ORDER FORM  */
.order-now {
  margin-top: 150px;
} 
.order-now .input-group > .form-control, .input-group > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
  border-radius: 30px;
  padding: 11px 40px;
  border: 1px solid #01a544;
}
.order-now .form-control{
  font-weight: 600;
  border: 1px solid #01a544;
}

.order-now .form-control-2 {
  font-weight: 500;
  margin: 0 0 7px 0;
  color: #8f8a8a;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #8f8a8a47;
  font-weight: 600;
  border-radius: 30px;
  padding: 12px;
  width: 100%;
  resize: none;
  font-family: 'Rubik', sans-serif;
  padding: 11px 40px;
  border: 1px solid #01a544;
}

.order-now .cta-live-chat{
  background: #01a544;
  padding: 25px 10px;
  border-radius: 10px;
  box-shadow: 0 0 5px 3px rgba(2, 2, 2, 0.2);
  position: relative;
  overflow: hidden;
  color: #fff;
}
.order-now .cta-live-chat .h3::before {
  content: "";
  position: absolute;
  right: 20px;
  top: 10px;
  width: 40px;
  height: 40px;
  background: url(../images/chat-icon.png);
  background-repeat: no-repeat;
  background-size: cover;
}
.chat-btn {
  padding: 10px 40px;
  border-radius: 30px;
  font-family: 'Rubik', sans-serif;
  color: #000;
  font-weight: 500;
  border-color: #000000;
  border: 1px solid;
  margin: 20px 0;
}
.chat-btn:hover{
  transition: 0.5s;
  background: #8f8a8a47;
  border-color: #111312;
  color: #000000;
}
.payment-and-sec{
  text-align: center;
  margin: 40px 0;
  color: #01a544;
  border: 2px solid #01a544;
  border-radius: 30px;
  padding: 20px;
  box-shadow: 0 0 5px 3px rgba(2, 2, 2, 0.2);
  
}
.ps{
    font-size: 20px;
}
.order-btn{
    padding: 10px 40px;
    border-radius: 30px;
    font-family: 'Rubik', sans-serif;
    color: #01a544;
    font-weight: 500;
    border-color: #000000;
    border: 1px solid #01a544;
    margin: 20px 0;
    background-color: #fff;
}
.order-btn:hover{
    transition: 0.5s;
    background-color: #01a544;
    color: #fff;
}
/* FORDER FORM */
</style>