<!--
 Created with Webformgenerator by easyclick.ch
 www.easyclick.ch
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<div class="TTWForm-container">
     
     
     <div id="form-title" class="form-title field">
          <h2>
               Deferred action for DREAMers ELIGIBILITY QUESTIONNAIRE
          </h2>
     </div>
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
 					<div class="form_description">
			<h2>Untitled Form</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Gender </label>
		<span>
			<input id="element_1_1" name="element_1" class="element radio" type="radio" value="1" />
<label class="choice" for="element_1_1">Male</label>
<input id="element_1_2" name="element_1" class="element radio" type="radio" value="2" />
<label class="choice" for="element_1_2">Female</label>

		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">What is your birth date?
 </label>
		<span>
			<input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_1">MM</label>
		</span>
		<span>
			<input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_2">DD</label>
		</span>
		<span>
	 		<input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_2_3">YYYY</label>
		</span>
	
		<span id="calendar_2">
			<img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_2_3",
			baseField    : "element_2",
			displayArea  : "calendar_2",
			button		 : "cal_img_2",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">What is the First and Third initial of your name? </label>
		<div>
			<input id="element_3" name="element_3" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">What is the First and Third initial of your last name? </label>
		<div>
			<input id="element_4" name="element_4" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Are you of Hispanic or Latino Origin  </label>
		<span>
			<input id="element_6_1" name="element_6" class="element radio" type="radio" value="1" />
<label class="choice" for="element_6_1">Yes</label>
<input id="element_6_2" name="element_6" class="element radio" type="radio" value="2" />
<label class="choice" for="element_6_2">No</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Please answer the following questions about HIV/AIDS. Select the button "True" if you think the statement is true. Select the button "False" if you think the statement is false.</h3>
			<p></p>
		</li>		<li id="li_7" >
		<label class="description" for="element_7">A. AIDS is a medical condition in which your body cannot fight off diseases. </label>
		<span>
			<input id="element_7_1" name="element_7" class="element radio" type="radio" value="1" />
<label class="choice" for="element_7_1">True</label>
<input id="element_7_2" name="element_7" class="element radio" type="radio" value="2" />
<label class="choice" for="element_7_2">False</label>

		</span> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">B. Anyone can get HIV/AIDS. </label>
		<span>
			<input id="element_8_1" name="element_8" class="element radio" type="radio" value="1" />
<label class="choice" for="element_8_1">True</label>
<input id="element_8_2" name="element_8" class="element radio" type="radio" value="2" />
<label class="choice" for="element_8_2">False</label>

		</span> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">C. AIDS can be cured. </label>
		<span>
			<input id="element_9_1" name="element_9" class="element radio" type="radio" value="1" />
<label class="choice" for="element_9_1">True</label>
<input id="element_9_2" name="element_9" class="element radio" type="radio" value="2" />
<label class="choice" for="element_9_2">False</label>

		</span> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">D. Abstinence is the only sure way of preventing HIV/AIDS infection. </label>
		<span>
			<input id="element_10_1" name="element_10" class="element radio" type="radio" value="1" />
<label class="choice" for="element_10_1">True</label>
<input id="element_10_2" name="element_10" class="element radio" type="radio" value="2" />
<label class="choice" for="element_10_2">False</label>

		</span> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">E. You can tell by looking whether someone is HIV positive. </label>
		<span>
			<input id="element_11_1" name="element_11" class="element radio" type="radio" value="1" />
<label class="choice" for="element_11_1">True</label>
<input id="element_11_2" name="element_11" class="element radio" type="radio" value="2" />
<label class="choice" for="element_11_2">False</label>

		</span> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">F. Condoms are effective in preventing HIV infection. </label>
		<span>
			<input id="element_12_1" name="element_12" class="element radio" type="radio" value="1" />
<label class="choice" for="element_12_1">True</label>
<input id="element_12_2" name="element_12" class="element radio" type="radio" value="2" />
<label class="choice" for="element_12_2">False</label>

		</span> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">G. You can get HIV/AIDS by sharing a needle with someone who is infected with HIV. </label>
		<span>
			<input id="element_13_1" name="element_13" class="element radio" type="radio" value="1" />
<label class="choice" for="element_13_1">True</label>
<input id="element_13_2" name="element_13" class="element radio" type="radio" value="2" />
<label class="choice" for="element_13_2">False</label>

		</span> 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">H. Having only one boyfriend or girlfriend is a sure way to prevent HIV infection. </label>
		<span>
			<input id="element_22_1" name="element_22" class="element radio" type="radio" value="1" />
<label class="choice" for="element_22_1">True</label>
<input id="element_22_2" name="element_22" class="element radio" type="radio" value="2" />
<label class="choice" for="element_22_2">False</label>

		</span> 
		</li>		<li id="li_23" >
		<label class="description" for="element_23">I. HIV can be spread by using someone's personal belongings (like a comb or hairbrush) or sitting on a toilet seat. </label>
		<span>
			<input id="element_23_1" name="element_23" class="element radio" type="radio" value="1" />
<label class="choice" for="element_23_1">True</label>
<input id="element_23_2" name="element_23" class="element radio" type="radio" value="2" />
<label class="choice" for="element_23_2">False</label>

		</span> 
		</li>		<li id="li_24" >
		<label class="description" for="element_24">J. HIV is present in semen, blood, vaginal secretions, and the breast milk of infected people. </label>
		<span>
			<input id="element_24_1" name="element_24" class="element radio" type="radio" value="1" />
<label class="choice" for="element_24_1">True</label>
<input id="element_24_2" name="element_24" class="element radio" type="radio" value="2" />
<label class="choice" for="element_24_2">False</label>

		</span> 
		</li>		<li class="section_break">
			<h3>7. Can the following behaviors put you at risk for getting HIV?</h3>
			<p></p>
		</li>		<li id="li_25" >
		<label class="description" for="element_25">A. Sharing needles for tattooing or piercing </label>
		<span>
			<input id="element_25_1" name="element_25" class="element radio" type="radio" value="1" />
<label class="choice" for="element_25_1">Yes</label>
<input id="element_25_2" name="element_25" class="element radio" type="radio" value="2" />
<label class="choice" for="element_25_2">No</label>
<input id="element_25_3" name="element_25" class="element radio" type="radio" value="3" />
<label class="choice" for="element_25_3">Not Sure</label>

		</span> 
		</li>		<li id="li_26" >
		<label class="description" for="element_26">B. Having sex without a condom </label>
		<span>
			<input id="element_26_1" name="element_26" class="element radio" type="radio" value="1" />
<label class="choice" for="element_26_1">Yes</label>
<input id="element_26_2" name="element_26" class="element radio" type="radio" value="2" />
<label class="choice" for="element_26_2">No</label>
<input id="element_26_3" name="element_26" class="element radio" type="radio" value="3" />
<label class="choice" for="element_26_3">Not Sure</label>

		</span> 
		</li>		<li id="li_27" >
		<label class="description" for="element_27">C. Donating blood </label>
		<span>
			<input id="element_27_1" name="element_27" class="element radio" type="radio" value="1" />
<label class="choice" for="element_27_1">Yes</label>
<input id="element_27_2" name="element_27" class="element radio" type="radio" value="2" />
<label class="choice" for="element_27_2">No</label>
<input id="element_27_3" name="element_27" class="element radio" type="radio" value="3" />
<label class="choice" for="element_27_3">Not Sure</label>

		</span> 
		</li>		<li id="li_28" >
		<label class="description" for="element_28">D. Using the same condom twice </label>
		<span>
			<input id="element_28_1" name="element_28" class="element radio" type="radio" value="1" />
<label class="choice" for="element_28_1">Yes</label>
<input id="element_28_2" name="element_28" class="element radio" type="radio" value="2" />
<label class="choice" for="element_28_2">No</label>
<input id="element_28_3" name="element_28" class="element radio" type="radio" value="3" />
<label class="choice" for="element_28_3">Not Sure</label>

		</span> 
		</li>		<li id="li_29" >
		<label class="description" for="element_29">E. Hugging </label>
		<span>
			<input id="element_29_1" name="element_29" class="element radio" type="radio" value="1" />
<label class="choice" for="element_29_1">Yes</label>
<input id="element_29_2" name="element_29" class="element radio" type="radio" value="2" />
<label class="choice" for="element_29_2">No</label>
<input id="element_29_3" name="element_29" class="element radio" type="radio" value="3" />
<label class="choice" for="element_29_3">Not Sure</label>

		</span> 
		</li>		<li id="li_30" >
		<label class="description" for="element_30">8. Whose job is it to see that a female doesn’t get pregnant when having sex? </label>
		<span>
			<input id="element_30_1" name="element_30" class="element radio" type="radio" value="1" />
<label class="choice" for="element_30_1">The female's</label>
<input id="element_30_2" name="element_30" class="element radio" type="radio" value="2" />
<label class="choice" for="element_30_2">The male's</label>
<input id="element_30_3" name="element_30" class="element radio" type="radio" value="3" />
<label class="choice" for="element_30_3">Both</label>
<input id="element_30_4" name="element_30" class="element radio" type="radio" value="4" />
<label class="choice" for="element_30_4">Neither</label>

		</span> 
		</li>		<li id="li_31" >
		<label class="description" for="element_31">9. Having a baby when you are in high school:
(SELECT THE ANSWER THAT YOU AGREE WITH MOST) </label>
		<span>
			<input id="element_31_1" name="element_31" class="element radio" type="radio" value="1" />
<label class="choice" for="element_31_1">Is not a problem at all</label>
<input id="element_31_2" name="element_31" class="element radio" type="radio" value="2" />
<label class="choice" for="element_31_2">Is not a problem because your family helps</label>
<input id="element_31_3" name="element_31" class="element radio" type="radio" value="3" />
<label class="choice" for="element_31_3">Is a problem but it's okay</label>
<input id="element_31_4" name="element_31" class="element radio" type="radio" value="4" />
<label class="choice" for="element_31_4">Is a problem for the mother and the baby but not for the father of the baby</label>
<input id="element_31_5" name="element_31" class="element radio" type="radio" value="5" />
<label class="choice" for="element_31_5">Is a problem for the mother, the baby and the father of the baby</label>

		</span> 
		</li>		<li id="li_32" >
		<label class="description" for="element_32">10. Do you think you will have sex while you are a teenager? </label>
		<span>
			<input id="element_32_1" name="element_32" class="element radio" type="radio" value="1" />
<label class="choice" for="element_32_1">I'm certain I won't</label>
<input id="element_32_2" name="element_32" class="element radio" type="radio" value="2" />
<label class="choice" for="element_32_2">I probably won't</label>
<input id="element_32_3" name="element_32" class="element radio" type="radio" value="3" />
<label class="choice" for="element_32_3">I'm not sure whether I will or not</label>
<input id="element_32_4" name="element_32" class="element radio" type="radio" value="4" />
<label class="choice" for="element_32_4">I probably will</label>
<input id="element_32_5" name="element_32" class="element radio" type="radio" value="5" />
<label class="choice" for="element_32_5">I'm certain I will</label>

		</span> 
		</li>		<li id="li_33" >
		<label class="description" for="element_33">11. Which of the following best describes your expectations about sexual partners during
the rest of your teen years? </label>
		<span>
			<input id="element_33_1" name="element_33" class="element radio" type="radio" value="1" />
<label class="choice" for="element_33_1">I don’t expect to have any sexual partners during the rest of my teen years.</label>
<input id="element_33_2" name="element_33" class="element radio" type="radio" value="2" />
<label class="choice" for="element_33_2">I expect to have only one sexual partner.</label>
<input id="element_33_3" name="element_33" class="element radio" type="radio" value="3" />
<label class="choice" for="element_33_3">I expect to have two or three sexual partners, but only one at a time.</label>
<input id="element_33_4" name="element_33" class="element radio" type="radio" value="4" />
<label class="choice" for="element_33_4">I expect to have two or three sexual partners at the same time.</label>
<input id="element_33_5" name="element_33" class="element radio" type="radio" value="5" />
<label class="choice" for="element_33_5">I expect to have several sexual partners at the same time.</label>

		</span> 
		</li>		<li id="li_34" >
		<label class="description" for="element_34">12. Which of the following best describes your plans about you or your partner using a
contraceptive the first time or next time you have sex? </label>
		<span>
			<input id="element_34_1" name="element_34" class="element radio" type="radio" value="1" />
<label class="choice" for="element_34_1">I plan to use a contraceptive, and will not have sex without using one.</label>
<input id="element_34_2" name="element_34" class="element radio" type="radio" value="2" />
<label class="choice" for="element_34_2">I plan to use a contraceptive, as long as it is convenient. nmlkj I</label>
<input id="element_34_3" name="element_34" class="element radio" type="radio" value="3" />
<label class="choice" for="element_34_3">I plan to use a contraceptive as long as my partner does not object.</label>
<input id="element_34_4" name="element_34" class="element radio" type="radio" value="4" />
<label class="choice" for="element_34_4">I plan to use a contraceptive only if my partner insists on it.</label>
<input id="element_34_5" name="element_34" class="element radio" type="radio" value="5" />
<label class="choice" for="element_34_5">I do not plan to use a contraceptive.</label>

		</span> 
		</li>		<li id="li_35" >
		<label class="description" for="element_35">13. Following is a list of many contraceptive methods that people use to avoid becoming
pregnant, or use to avoid sexually transmitted diseases. Which of these methods do you
intend to use in the next year?
(SELECT ALL THAT APPLY) </label>
		<span>
			<input id="element_35_1" name="element_35_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_35_1">This question does not apply—I don’t intend to be sexually active</label>
<input id="element_35_2" name="element_35_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_35_2">None—even though I expect to be sexually active</label>
<input id="element_35_3" name="element_35_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_35_3">Birth control medication (pills, shots, or implant)</label>
<input id="element_35_4" name="element_35_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_35_4">Condom</label>
<input id="element_35_5" name="element_35_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_35_5">Rhythm (having sex during the “safe time” of the month )</label>
<input id="element_35_6" name="element_35_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_35_6">Withdrawal (pulling out before sperm comes out)</label>

		</span> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Other (please name) </label>
		<div>
			<input id="element_15" name="element_15" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_36" >
		<label class="description" for="element_36">14. What method of birth control, if any, did you or your partner use the last time you had
sex?
(IF YOU USED TWO OR MORE METHODS TOGETHER, PLEASE SELECT EACH METHOD
THAT YOU USED) </label>
		<span>
			<input id="element_36_1" name="element_36_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_36_1">The question does not apply—I haven’t had sexual intercourse</label>
<input id="element_36_2" name="element_36_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_36_2">None—We did not use any method of birth control the last time we had sexual intercourse.</label>
<input id="element_36_3" name="element_36_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_36_3">Birth control medication (pills, shots, or implant)</label>
<input id="element_36_4" name="element_36_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_36_4">Condom</label>
<input id="element_36_5" name="element_36_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_36_5">Rhythm (having sex during the “safe time” of the month)</label>
<input id="element_36_6" name="element_36_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_36_6">Withdrawal (pulling out before sperm comes out)</label>

		</span> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Other (please name) </label>
		<div>
			<input id="element_16" name="element_16" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_37" >
		<label class="description" for="element_37">15. Thinking of all the times you have had sex, about what percentage of the time did you
or your partner used a condom </label>
		<span>
			<input id="element_37_1" name="element_37" class="element radio" type="radio" value="1" />
<label class="choice" for="element_37_1">The question does not apply—I haven’t had sexual intercourse</label>
<input id="element_37_2" name="element_37" class="element radio" type="radio" value="2" />
<label class="choice" for="element_37_2">Never (0%)</label>
<input id="element_37_3" name="element_37" class="element radio" type="radio" value="3" />
<label class="choice" for="element_37_3">A few times (1%40%)</label>
<input id="element_37_4" name="element_37" class="element radio" type="radio" value="4" />
<label class="choice" for="element_37_4">Half the time (41%60%)</label>
<input id="element_37_5" name="element_37" class="element radio" type="radio" value="5" />
<label class="choice" for="element_37_5">Most times (61%99%)</label>
<input id="element_37_6" name="element_37" class="element radio" type="radio" value="6" />
<label class="choice" for="element_37_6">Every time (100%)</label>

		</span> 
		</li>		<li class="section_break">
			<h3>16. What we know about sex and having babies and where we learned it can have an important effect on our lives. In your own life, have
you ever talked with any of your parents or guardians about:</h3>
			<p></p>
		</li>		<li id="li_38" >
		<label class="description" for="element_38">b. How pregnancy occurs? </label>
		<span>
			<input id="element_38_1" name="element_38" class="element radio" type="radio" value="1" />
<label class="choice" for="element_38_1">Yes</label>
<input id="element_38_2" name="element_38" class="element radio" type="radio" value="2" />
<label class="choice" for="element_38_2">No</label>

		</span> 
		</li>		<li id="li_39" >
		<label class="description" for="element_39">c. Sexually transmitted diseases (STDs)? </label>
		<span>
			<input id="element_39_1" name="element_39" class="element radio" type="radio" value="1" />
<label class="choice" for="element_39_1">Yes</label>
<input id="element_39_2" name="element_39" class="element radio" type="radio" value="2" />
<label class="choice" for="element_39_2">No</label>

		</span> 
		</li>		<li id="li_40" >
		<label class="description" for="element_40">d. How to say “no” to sex? </label>
		<span>
			<input id="element_40_1" name="element_40" class="element radio" type="radio" value="1" />
<label class="choice" for="element_40_1">Yes</label>
<input id="element_40_2" name="element_40" class="element radio" type="radio" value="2" />
<label class="choice" for="element_40_2">No</label>

		</span> 
		</li>		<li id="li_41" >
		<label class="description" for="element_41">e. Methods of birth control—that is, how to prevent a pregnancy from happening? </label>
		<span>
			<input id="element_41_1" name="element_41" class="element radio" type="radio" value="1" />
<label class="choice" for="element_41_1">Yes</label>
<input id="element_41_2" name="element_41" class="element radio" type="radio" value="2" />
<label class="choice" for="element_41_2">No</label>

		</span> 
		</li>		<li id="li_42" >
		<label class="description" for="element_42">f. How to prevent human immunodeficiency virus (HIV) by using safer sex practices? </label>
		<span>
			<input id="element_42_1" name="element_42" class="element radio" type="radio" value="1" />
<label class="choice" for="element_42_1">Yes</label>
<input id="element_42_2" name="element_42" class="element radio" type="radio" value="2" />
<label class="choice" for="element_42_2">No</label>

		</span> 
		</li>		<li id="li_43" >
		<label class="description" for="element_43">g. Sexual abstinence? (For example, not having sex until you are older or married.) </label>
		<span>
			<input id="element_43_1" name="element_43" class="element radio" type="radio" value="1" />
<label class="choice" for="element_43_1">Yes</label>
<input id="element_43_2" name="element_43" class="element radio" type="radio" value="2" />
<label class="choice" for="element_43_2">No</label>

		</span> 
		</li>		<li class="section_break">
			<h3>17. Please look at each choice below and mark whether you think each one is an
"effective" or "not effective" birth control method. If you do not know what the method is
or do not know how effective it is for preventing pregnancy, mark the "don’t know" option</h3>
			<p></p>
		</li>		<li id="li_44" >
		<label class="description" for="element_44">a. Diaphragm (contracptive barrier inserted into the vagina before sexual intercourse) </label>
		<span>
			<input id="element_44_1" name="element_44" class="element radio" type="radio" value="1" />
<label class="choice" for="element_44_1">Effective</label>
<input id="element_44_2" name="element_44" class="element radio" type="radio" value="2" />
<label class="choice" for="element_44_2">Not Effective</label>
<input id="element_44_3" name="element_44" class="element radio" type="radio" value="3" />
<label class="choice" for="element_44_3">Don't know</label>

		</span> 
		</li>		<li id="li_45" >
		<label class="description" for="element_45">b. Condom (rubber) </label>
		<span>
			<input id="element_45_1" name="element_45" class="element radio" type="radio" value="1" />
<label class="choice" for="element_45_1">Effective</label>
<input id="element_45_2" name="element_45" class="element radio" type="radio" value="2" />
<label class="choice" for="element_45_2">Not Effective</label>
<input id="element_45_3" name="element_45" class="element radio" type="radio" value="3" />
<label class="choice" for="element_45_3">Don't know</label>

		</span> 
		</li>		<li id="li_46" >
		<label class="description" for="element_46">c. IntraUterine (IUD) </label>
		<span>
			<input id="element_46_1" name="element_46" class="element radio" type="radio" value="1" />
<label class="choice" for="element_46_1">Effectvie</label>
<input id="element_46_2" name="element_46" class="element radio" type="radio" value="2" />
<label class="choice" for="element_46_2">Not Effective</label>
<input id="element_46_3" name="element_46" class="element radio" type="radio" value="3" />
<label class="choice" for="element_46_3">Don't know</label>

		</span> 
		</li>		<li id="li_47" >
		<label class="description" for="element_47">d. Rhythm ("safe" time of the month) nmlkj </label>
		<span>
			<input id="element_47_1" name="element_47" class="element radio" type="radio" value="1" />
<label class="choice" for="element_47_1">Effective</label>
<input id="element_47_2" name="element_47" class="element radio" type="radio" value="2" />
<label class="choice" for="element_47_2">Not Effective</label>
<input id="element_47_3" name="element_47" class="element radio" type="radio" value="3" />
<label class="choice" for="element_47_3">Don't know</label>

		</span> 
		</li>		<li id="li_48" >
		<label class="description" for="element_48">e. Sponge (contraceptive barrier inserted into the vagina before sexual intercourse) </label>
		<span>
			<input id="element_48_1" name="element_48" class="element radio" type="radio" value="1" />
<label class="choice" for="element_48_1">Effective</label>
<input id="element_48_2" name="element_48" class="element radio" type="radio" value="2" />
<label class="choice" for="element_48_2">Not Effective</label>
<input id="element_48_3" name="element_48" class="element radio" type="radio" value="3" />
<label class="choice" for="element_48_3">Don't know</label>

		</span> 
		</li>		<li id="li_49" >
		<label class="description" for="element_49">f. Birth Control Medication (the Pill, Evra patch, NuvoRing, or Depo shot) </label>
		<span>
			<input id="element_49_1" name="element_49" class="element radio" type="radio" value="1" />
<label class="choice" for="element_49_1">Effective</label>
<input id="element_49_2" name="element_49" class="element radio" type="radio" value="2" />
<label class="choice" for="element_49_2">Not Effective</label>
<input id="element_49_3" name="element_49" class="element radio" type="radio" value="3" />
<label class="choice" for="element_49_3">Don't know</label>

		</span> 
		</li>		<li id="li_50" >
		<label class="description" for="element_50">g. Withdrawal ("pulling out") </label>
		<span>
			<input id="element_50_1" name="element_50" class="element radio" type="radio" value="1" />
<label class="choice" for="element_50_1">Effective</label>
<input id="element_50_2" name="element_50" class="element radio" type="radio" value="2" />
<label class="choice" for="element_50_2">Not Effective</label>
<input id="element_50_3" name="element_50" class="element radio" type="radio" value="3" />
<label class="choice" for="element_50_3">Don't know</label>

		</span> 
		</li>		<li class="section_break">
			<h3>18. Here are some statements about various methods of contraception. Read each statement, then decide if you think it is true or false.</h3>
			<p></p>
		</li>		<li id="li_51" >
		<label class="description" for="element_51">a. A sexually active female can become pregnant if she forgets to take her birth control
pills for several days in a row. </label>
		<span>
			<input id="element_51_1" name="element_51" class="element radio" type="radio" value="1" />
<label class="choice" for="element_51_1">True</label>
<input id="element_51_2" name="element_51" class="element radio" type="radio" value="2" />
<label class="choice" for="element_51_2">False</label>
<input id="element_51_3" name="element_51" class="element radio" type="radio" value="3" />
<label class="choice" for="element_51_3">I don't know</label>

		</span> 
		</li>		<li id="li_52" >
		<label class="description" for="element_52">b. Birth control pills can help prevent HIV. </label>
		<span>
			<input id="element_52_1" name="element_52" class="element radio" type="radio" value="1" />
<label class="choice" for="element_52_1">True</label>
<input id="element_52_2" name="element_52" class="element radio" type="radio" value="2" />
<label class="choice" for="element_52_2">False</label>
<input id="element_52_3" name="element_52" class="element radio" type="radio" value="3" />
<label class="choice" for="element_52_3">I don't know</label>

		</span> 
		</li>		<li id="li_53" >
		<label class="description" for="element_53">c. A teen boy cannot make a teen girl pregnant the first few times he has sex. </label>
		<span>
			<input id="element_53_1" name="element_53" class="element radio" type="radio" value="1" />
<label class="choice" for="element_53_1">True</label>
<input id="element_53_2" name="element_53" class="element radio" type="radio" value="2" />
<label class="choice" for="element_53_2">False</label>
<input id="element_53_3" name="element_53" class="element radio" type="radio" value="3" />
<label class="choice" for="element_53_3">I don't know</label>

		</span> 
		</li>		<li id="li_54" >
		<label class="description" for="element_54">19. A female can become pregnant: </label>
		<span>
			<input id="element_54_1" name="element_54" class="element radio" type="radio" value="1" />
<label class="choice" for="element_54_1">The first time she has sexual intercourse</label>
<input id="element_54_2" name="element_54" class="element radio" type="radio" value="2" />
<label class="choice" for="element_54_2">If she has sexual intercourse during her menstrual period</label>
<input id="element_54_3" name="element_54" class="element radio" type="radio" value="3" />
<label class="choice" for="element_54_3">If she has sexual intercourse standing up</label>
<input id="element_54_4" name="element_54" class="element radio" type="radio" value="4" />
<label class="choice" for="element_54_4">If the male sperm gets near the opening of the vagina without the penis actually entering her body</label>
<input id="element_54_5" name="element_54" class="element radio" type="radio" value="5" />
<label class="choice" for="element_54_5">All of the above</label>
<input id="element_54_6" name="element_54" class="element radio" type="radio" value="6" />
<label class="choice" for="element_54_6">I don’t know</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Please read the following statements and indicate if you "agree" or "disagree."</h3>
			<p></p>
		</li>		<li id="li_55" >
		<label class="description" for="element_55">20. It is against my parents’ values for me to have sex while I am a teenager. </label>
		<span>
			<input id="element_55_1" name="element_55" class="element radio" type="radio" value="1" />
<label class="choice" for="element_55_1">Strongly agree</label>
<input id="element_55_2" name="element_55" class="element radio" type="radio" value="2" />
<label class="choice" for="element_55_2">Agree</label>
<input id="element_55_3" name="element_55" class="element radio" type="radio" value="3" />
<label class="choice" for="element_55_3">Not Sure</label>
<input id="element_55_4" name="element_55" class="element radio" type="radio" value="4" />
<label class="choice" for="element_55_4">Disagree</label>
<input id="element_55_5" name="element_55" class="element radio" type="radio" value="5" />
<label class="choice" for="element_55_5">Strongly disagree</label>

		</span> 
		</li>		<li id="li_56" >
		<label class="description" for="element_56">21. It is against my values for me to have sex while I am a teenager. </label>
		<span>
			<input id="element_56_1" name="element_56" class="element radio" type="radio" value="1" />
<label class="choice" for="element_56_1">Strongly agree</label>
<input id="element_56_2" name="element_56" class="element radio" type="radio" value="2" />
<label class="choice" for="element_56_2">Agree</label>
<input id="element_56_3" name="element_56" class="element radio" type="radio" value="3" />
<label class="choice" for="element_56_3">Not sure</label>
<input id="element_56_4" name="element_56" class="element radio" type="radio" value="4" />
<label class="choice" for="element_56_4">Disagree</label>
<input id="element_56_5" name="element_56" class="element radio" type="radio" value="5" />
<label class="choice" for="element_56_5">Strongly disagree</label>

		</span> 
		</li>		<li id="li_57" >
		<label class="description" for="element_57">22. My friends think I should not have sex while I’m a teenager. </label>
		<span>
			<input id="element_57_1" name="element_57" class="element radio" type="radio" value="1" />
<label class="choice" for="element_57_1">Strongly agree</label>
<input id="element_57_2" name="element_57" class="element radio" type="radio" value="2" />
<label class="choice" for="element_57_2">Agree</label>
<input id="element_57_3" name="element_57" class="element radio" type="radio" value="3" />
<label class="choice" for="element_57_3">Not Sure</label>
<input id="element_57_4" name="element_57" class="element radio" type="radio" value="4" />
<label class="choice" for="element_57_4">Disagree</label>
<input id="element_57_5" name="element_57" class="element radio" type="radio" value="5" />
<label class="choice" for="element_57_5">Strongly disagree</label>

		</span> 
		</li>		<li class="section_break">
			<h3>23. How comfortable are you:</h3>
			<p></p>
		</li>		<li id="li_58" >
		<label class="description" for="element_58">a. Talking with friends about sex. </label>
		<span>
			<input id="element_58_1" name="element_58" class="element radio" type="radio" value="1" />
<label class="choice" for="element_58_1">Very comfortable</label>
<input id="element_58_2" name="element_58" class="element radio" type="radio" value="2" />
<label class="choice" for="element_58_2">Comfortable</label>
<input id="element_58_3" name="element_58" class="element radio" type="radio" value="3" />
<label class="choice" for="element_58_3">A little uncomfortable</label>
<input id="element_58_4" name="element_58" class="element radio" type="radio" value="4" />
<label class="choice" for="element_58_4">Very uncomfortable</label>
<input id="element_58_5" name="element_58" class="element radio" type="radio" value="5" />
<label class="choice" for="element_58_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_59" >
		<label class="description" for="element_59">b. Talking with a date or boy/girlfriend about sex. </label>
		<span>
			<input id="element_59_1" name="element_59" class="element radio" type="radio" value="1" />
<label class="choice" for="element_59_1">Very comfortable</label>
<input id="element_59_2" name="element_59" class="element radio" type="radio" value="2" />
<label class="choice" for="element_59_2">Comfortable</label>
<input id="element_59_3" name="element_59" class="element radio" type="radio" value="3" />
<label class="choice" for="element_59_3">A little uncomfortable</label>
<input id="element_59_4" name="element_59" class="element radio" type="radio" value="4" />
<label class="choice" for="element_59_4">Very uncomfortable</label>
<input id="element_59_5" name="element_59" class="element radio" type="radio" value="5" />
<label class="choice" for="element_59_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_60" >
		<label class="description" for="element_60">c. Talking with parents or guardians about sex. </label>
		<span>
			<input id="element_60_1" name="element_60" class="element radio" type="radio" value="1" />
<label class="choice" for="element_60_1">Very comfortable</label>
<input id="element_60_2" name="element_60" class="element radio" type="radio" value="2" />
<label class="choice" for="element_60_2">Comfortable</label>
<input id="element_60_3" name="element_60" class="element radio" type="radio" value="3" />
<label class="choice" for="element_60_3">A little uncomfortable</label>
<input id="element_60_4" name="element_60" class="element radio" type="radio" value="4" />
<label class="choice" for="element_60_4">Very uncomfortable</label>
<input id="element_60_5" name="element_60" class="element radio" type="radio" value="5" />
<label class="choice" for="element_60_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_61" >
		<label class="description" for="element_61">d. Talking with friends about birth control. </label>
		<span>
			<input id="element_61_1" name="element_61" class="element radio" type="radio" value="1" />
<label class="choice" for="element_61_1">Very comfortable</label>
<input id="element_61_2" name="element_61" class="element radio" type="radio" value="2" />
<label class="choice" for="element_61_2">Comfortable</label>
<input id="element_61_3" name="element_61" class="element radio" type="radio" value="3" />
<label class="choice" for="element_61_3">A little uncomfortable</label>
<input id="element_61_4" name="element_61" class="element radio" type="radio" value="4" />
<label class="choice" for="element_61_4">Very uncomfortable</label>
<input id="element_61_5" name="element_61" class="element radio" type="radio" value="5" />
<label class="choice" for="element_61_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_62" >
		<label class="description" for="element_62">e. Talking with a date or boy/girlfriend about birth control. </label>
		<span>
			<input id="element_62_1" name="element_62" class="element radio" type="radio" value="1" />
<label class="choice" for="element_62_1">Very comfortable</label>
<input id="element_62_2" name="element_62" class="element radio" type="radio" value="2" />
<label class="choice" for="element_62_2">Comfortable</label>
<input id="element_62_3" name="element_62" class="element radio" type="radio" value="3" />
<label class="choice" for="element_62_3">A little uncomfortable</label>
<input id="element_62_4" name="element_62" class="element radio" type="radio" value="4" />
<label class="choice" for="element_62_4">Very uncomfortable</label>
<input id="element_62_5" name="element_62" class="element radio" type="radio" value="5" />
<label class="choice" for="element_62_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_63" >
		<label class="description" for="element_63">f. Talking with parents or guardians about birth control. </label>
		<span>
			<input id="element_63_1" name="element_63" class="element radio" type="radio" value="1" />
<label class="choice" for="element_63_1">Very comfortable</label>
<input id="element_63_2" name="element_63" class="element radio" type="radio" value="2" />
<label class="choice" for="element_63_2">Comfortable</label>
<input id="element_63_3" name="element_63" class="element radio" type="radio" value="3" />
<label class="choice" for="element_63_3">A little uncomfortable</label>
<input id="element_63_4" name="element_63" class="element radio" type="radio" value="4" />
<label class="choice" for="element_63_4">Very uncomfortable</label>
<input id="element_63_5" name="element_63" class="element radio" type="radio" value="5" />
<label class="choice" for="element_63_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_64" >
		<label class="description" for="element_64">g. Telling a date or boy/girlfriend what you want to do and do not want to do sexually. </label>
		<span>
			<input id="element_64_1" name="element_64" class="element radio" type="radio" value="1" />
<label class="choice" for="element_64_1">Very comfortable</label>
<input id="element_64_2" name="element_64" class="element radio" type="radio" value="2" />
<label class="choice" for="element_64_2">Comfortable</label>
<input id="element_64_3" name="element_64" class="element radio" type="radio" value="3" />
<label class="choice" for="element_64_3">A little uncomfortable</label>
<input id="element_64_4" name="element_64" class="element radio" type="radio" value="4" />
<label class="choice" for="element_64_4">Very uncomfortable</label>
<input id="element_64_5" name="element_64" class="element radio" type="radio" value="5" />
<label class="choice" for="element_64_5">This does not apply—I have not been in this situation</label>

		</span> 
		</li>		<li id="li_65" >
		<label class="description" for="element_65">h. Saying no to a sexual comeon. </label>
		<span>
			<input id="element_65_1" name="element_65" class="element radio" type="radio" value="1" />
<label class="choice" for="element_65_1">Very comfortable</label>
<input id="element_65_2" name="element_65" class="element radio" type="radio" value="2" />
<label class="choice" for="element_65_2">Comfortable</label>
<input id="element_65_3" name="element_65" class="element radio" type="radio" value="3" />
<label class="choice" for="element_65_3">A little uncomfortable</label>
<input id="element_65_4" name="element_65" class="element radio" type="radio" value="4" />
<label class="choice" for="element_65_4">Very uncomfortable</label>
<input id="element_65_5" name="element_65" class="element radio" type="radio" value="5" />
<label class="choice" for="element_65_5">This does not apply—I have not been in this situation.</label>

		</span> 
		</li>		<li id="li_66" >
		<label class="description" for="element_66">24. Is there pressure from your friends for you to have sex? </label>
		<span>
			<input id="element_66_1" name="element_66" class="element radio" type="radio" value="1" />
<label class="choice" for="element_66_1">No pressure at all</label>
<input id="element_66_2" name="element_66" class="element radio" type="radio" value="2" />
<label class="choice" for="element_66_2">A little pressure</label>
<input id="element_66_3" name="element_66" class="element radio" type="radio" value="3" />
<label class="choice" for="element_66_3">A moderate amount of pressure</label>
<input id="element_66_4" name="element_66" class="element radio" type="radio" value="4" />
<label class="choice" for="element_66_4">A lot of pressure</label>

		</span> 
		</li>		<li id="li_67" >
		<label class="description" for="element_67">25. About how many of your friends have had sex? </label>
		<span>
			<input id="element_67_1" name="element_67" class="element radio" type="radio" value="1" />
<label class="choice" for="element_67_1">None of them</label>
<input id="element_67_2" name="element_67" class="element radio" type="radio" value="2" />
<label class="choice" for="element_67_2">A few of them</label>
<input id="element_67_3" name="element_67" class="element radio" type="radio" value="3" />
<label class="choice" for="element_67_3">About half of them</label>
<input id="element_67_4" name="element_67" class="element radio" type="radio" value="4" />
<label class="choice" for="element_67_4">Most of them</label>
<input id="element_67_5" name="element_67" class="element radio" type="radio" value="5" />
<label class="choice" for="element_67_5">All of them</label>

		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="536384" />
			    
				<input id="form-submit" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
     </form>
</div>

</body>
</html>