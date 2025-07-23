# PHP-Labs-Media-Systems-Overall
lab01


lab01a) 
Create a PHP page that outputs to the screen your name and the name of one person sitting beside you on separate lines using echo statements.

lab01b) 
Create a PHP page that declares two variables, Alpha and Beta. Assign the values 14 and 2 to these variables, respectively. Output these values using echo statements.

Modify the page lab01b.php to print text before the values that states “The value of Alpha is ” and then state the value of Alpha, and likewise for Beta. Test it.

Modify the page lab01b.php to multiply Alpha and Beta and output the result with text saying “The value of Result is: ” and then state the value of the result. Test it.

lab01c) 
Create a PHP page that calculates the results of the following expressions and displays all four results.

7 * 10 – 5 % 3 * 4 + 9

((12+3) / 2) / (8 – (5+1))

(int)((12+3) / 2) / (8 – (5+1))

((12 % 5) % 3) * (10 + 5 * 3)

lab01d)
UPC plans to launch a new cable service in Wexford town.  To offer these connections, they need Wexford County Council (WCC) to lay underground broadband cable. 

Connection Fee: UPC charges €53 per customer connection
Infrastructure Cost: Wexford County Council (WCC) charges €38 per metre for laying underground broadband cable
Coverage Requirements: 4,100 metres of cable needed for complete town coverage
Customer Projections: 3,000 customers expected over the first three years

Create a PHP page that calculates and displays the total revenue from the cable service scheme over the first three years.

Declare variables:
$connectionCharge, 
$cableCost,
$installationsPerYear, 
$cableLength 
$expectedUsers

lab01e)
Tesco Ireland wishes to have a wage calculation program. Essentially, this is just a program that calculates the wages of different employees after every week, and it does this by using the following formula:
Wages = Hours x Rate

Write a PHP page to perform the following:

Output the Hours worked by the employee.
Output the Rate that the current employee has.
Output the Wages that this employee is entitled to.

Use the following data in two different sections of the page:
          Employee 1          Employee 2
Hours     15                  40.8
Rate €    4.80                5.20

lab01f)
Consider a circle with a radius of 28.92cm. You are required to write a program to calculate the circle's perimeter and area and display the results.

The formulae to calculate these are:
	Perimeter = 2 x Pi x r
	Area = Pi x r2

Take the value of Pi as 3.14.

You should output your results in the following form:

The perimeter of the circle is ….
The area of the circle is ...


lab02


lab02a)

Return to lab1d and copy this file to a new file, lab2a-result.php.  and reconfigure the application to prompt the user to enter the values used in the calculation. Use these values to output the profit achieved.

lab02b) - Product of 2 Nums

Write a program that prompts the user to enter two numbers and then outputs the product of these two numbers.

lab02c) Calc Perimeter & Area of Circle

You are required to write a program that prompts the user to enter the radius of a circle in metres, and then calculates the circle's perimeter and area and displays the results.

The formulae to calculate these are:
	Perimeter = 2 x Pi x r
	Area = Pi x r2

lab02d)

Return to lab1e and copy this file to a new file, lab2d-result.php.  and reconfigure the application to prompt the user to enter the values used in the calculation. Use these values to output the profit achieved.

lab02e) - Location Radios & Transport Checkboxes
Create a form that presents three radio buttons labelled Wexford, Wicklow, and  Waterford. Echo the chosen result to the results page.

Also, add checkboxes that allow the user to check all the modes of transport that they use to travel to college. Echo these values chosen to the next page.

lab02f) - Use Color Picker to Color Div
Create a form that prompts the user to pick a colour from the HTML5 colour picker input type. Pass this colour value to a results page, which colours a large, centred div in the chosen colour.

lab02g) - Use Colour Picker to Colour Background & Div
Create a form that prompts the user to pick two colours from separate colour picker types. Pass both colour values to a results page. The first colour should be used as the background colour of the page, and the 2nd to colour a centred div.

lab02h) - Select the Box to choose the County
Copy lab02e and change the radio button to a select box with the 26 counties listed in alphabetical order. 

lab02i) - Select the Box to choose the County
Create a form and result page pair that asks the user to choose a county from a select box of Leinster counties. Once the user chooses a county from the select box and submits, the results page shows the county flag using two (or three divs.


Lab03 - Strings


lab03a) - string anagram
Create a web application that prompts the user to submit a string  in a form and then outputs an anagrammed version of the string.

lab03b) - remove vowels from string
Create a web application that prompts the user to input a string in a form and then displays this string with all the vowels removed.

lab03c)- count the number of words
Develop code that reads a string inputted by a user, counts the number of words in this string, and displays the result.

lab03d) - remove foul word
It is necessary to write a program that searches for pieces of unsavoury language in a given string. As a prototyp,e write a program that searches a string given by a user for the word “foul” and replaces it with “****”

lab03e) - parse forename/surname

Create a form that prompts a user for their full name in a single text box. Presume that the user will enter only a forename and surname.

Create a results page that will separate the forename and surname onto separate lines.

lab03f) - parse car reg
Part I)
Write a web application that prompts the user for an Irish car registration. On pressing submit, the car registration should be parsed into its respective pieces.

Presume that all car registrations entered will have three-character years and two-character county codes.

Part II)
We can’t be sure that the user will enter the car registration in the way we expect. For instance, they may enter the registration 97 RN 1047 including spaces. Make your web application robust enough so that it can handle this situation.

Part III)- This part uses an if-else statement
The county code entered may not be a 2 character county code. It may be of the form 01D89098. Alter your code to take account of this. You will need to use the ctype_alpha function.

lab03g) - choose colour to change bg

Part I)
Create a web application that prompts the user for a colour name. When the user presses submit, the resulting page should show a page with the background colour changed to the entered colour. To fill the page with content, insert the lyrics of a well-known song.

Part II)
Amend the application to use the new ‘colour’ input type that comes with HTML5. Beware - this input type may only work with certain browsers...see that the browser you use is compatible.

Part III)
Amend the application to give the user even more choice over the styling of the result page. Ask them to choose a colour for the body background, paragraph background, h1 text colour and paragraph text colour. Once the user submits, the results page should implement all the colours chosen.

Part IV)
Add other choices to the user form to allow the user to alter CSS properties on the result page.

lab03i) - split colour into parts
Part I)
Create a form that presents a colour picker input type to the user. On choosing a colour and clicking on the submit button, the results page shows a div with the background colour that shows the colour submitted and also three divs that show the constituent colours (R, G and B) that make up the chosen colour.

Part II)
Amend this code to allow the three constituent colours to overlap one another to see all the overlapping combinations (7 different colours will be shown).


Lab04 - If Statements


lab04a) - numbers

Write a form page that
Asks the user for two inputs,  both numbers.

Output the result in the following form: "The greater number is 10.".

lab04b) - credit card validity
Part I)
Create a web application that prompts the user to submit a credit/debit card number of 16 digits.

Create a results page that checks to see if there are 16 characters in the string submitted. 
If so echo 
‘Valid Card Number’

if not echo 
‘Invalid Card Number’

Part II) - this part uses logical operators &&, etc...

Study the ctype_digit function. Use it in your code to make sure that the string entered is numeric.

lab04c) - nouns and numbers
Write a web application that
takes 2 arguments, a noun and a number,  in  two separate text fields,
Returns the number and pluralised form, like "5 cats" or "1 dog".

lab04d) - SETU Username Identify

Part I)
The computing services department requires a web application that prompts the user for their username. Once the user submits their username, the application creates a result page and states whether the user is a student or a staff member.

Remember! Student usernames always take the form ‘C01234567’ and staff usernames take the form ‘owen.brady’

You can presume that all staff have usernames that do not start with the letter C.

Part II)
Does your solution for part I take into account staff members whose username begins with ‘C’?

lab04e) - choosing stylesheets - if else 
Consider the following form page:

The user is brought to lab04e-result.php regardless of the choice, but the stylesheet that the result page uses changes. 

This is just a basic ‘proof of concept’. Have two basic stylesheets, style1.css and style2.css, that rule different background colours for the page. Place some basic holding text in the result page to show the change.

lab04f) - stock prices
A stockbroker requires a web application that prompts the user to enter the price at which a share was bought, the number of shares purchased and the price at which the same shares were sold.

These three values should then be passed to a results page, which calculates the percentage gain or loss on the trade, and shows this value and the total transaction amount. 
If the value is break-even or positive, then text is displayed in green with a green border around the paragraph. 
If it’s a losing trade, then the value is styled in red  with a red border around the paragraph.

User style attributes affect these colour changes.

lab04g) - century/millennium - uses logical Operators
Part I)
Write a web application that requests a date from an HTML 5 date picker input (must use Chrome). On picking a date and submitting, the user should be shown a result that states whether the date picked is in the current century.

Sample outputs:
10/10/2015 is in this century

19/12/1980 is not in this century

Part II)
Add functionality to the results page that also states whether the date picked is in this millennium 

Sample outputs:
10/10/2225 is not in this century but is in this millennium

19/12/1980 is not in this century and is not in this millennium

lab04h) - salary calc - if 
Create a web application that asks the user to enter how many hours they worked in the last week and also what their hourly rate of pay is.

The results page should give the total wage for the week. However, all hours worked over 40 hours should be paid double time.

lab04i) - grade calc - if elseif
Write a web application that prompts the user for a percentage mark. 

On pressing the submit button, a result page is shown with the percentage mark entered, the grade achieved (see table).

percentage
grade
>=70%
distinction
>=60%
merit 1
>=55%
merit 2
>=40%
pass
<40%
fail

lab04j) - distance conversion - if else

Irish motorists’ use of imperial and metric systems when driving/choosing their vehicles is at best confusing. For some time, there was a situation where road signage on Irish roads showed km and speed limits were in mph.

In 2005, the NRA replaced all road distance and speed limit signage that were in miles and replaced them with km.

Create a web application that presents a form to a user as shown below:

Depending on the radio button chosen, the web application outputs the appropriate conversion distance.

the conversion rate of  1mile : 1km is 1:1.60934

You may need to round your result.

lab04k) - if elseif & substr()

Write a web application that prompts the user for a website address. Parse the top-level domain from this web address. Use an if-elseif structure to test to see whether the address is a .ie, .uk, .fr, .pl, .cn or .de  address.

Echo out the corresponding country name. 

If the user inputs a top-level domain other than those listed above, have the web application echo out ‘Other’.

lab04l) - change bg based on date
Create a web application that asks the user to enter a date in the form dd/mm/yy. If the date is in December, the page shown shows a red background and plays a Christmas-themed tune in the background. 

Otherwise, the page shows a grey background with a winter landscape image.

lab04m) - Fuel Consumption - logical operators

Consider the following form:

A user inputs a distance and fuel used and chooses whether these values are in miles/km or gallons/litres.

The user then checks whether they want the fuel consumption of their vehicle output in mpg and/or l/100km.

When the user clicks calculate, your web application should oblige.

the conversion rate of  1mile : 1km is 1:1.60934
The conversion rate of  1 imperial (UK) gallon: 1 litre is 1:4.54609

lab04q) - traffic lights - logical operators

Consider a road junction depending on traffic lights for control. Car traffic either moves east/ west or from north/south.
On a form page, have 2 select boxes that represent the traffic lights for each direction.
The first traffic light allows traffic to flow on the east-west road.
The second traffic light allows traffic on the north-south road to flow.

When the user picks the different traffic light combinations and submits, one of three outputs occurs:
When only one light is green. output: normal car flow
When both lights are red.output: pedestrians can cross
When both lights are green. output: malfunction - accident imminent

lab04r) - Switch Statement
Part I)
Create a web application that gives the user the option to choose one of the colours of the rainbow from a combo (dropdown) box.

Create a results page with the user's choice as the background colour and  that shows the colour name in h1 lettering in the centre of the screen. Use a switch statement in your results page code.


lab05


lab05a) - subsequent letters of the name
Part I)
Create a PHP application that prompts a user for their name. When the user submits, the results page shows each letter of the name displayed on separate lines.

Part II)
Amend the code of this application to display the letters in reverse order.

lab05b) - Local Road Numbers
Create an application that outputs local road numbers from L100 to L499 on separate lines.

lab05c) - Appointment Book
Create a PHP page that uses a while loop to lay out an appointments page where the user can enter in details regarding appointments for different times of the day. The times will range from 9:00 to 20:00 hours on a 24-hour clock.

lab05d) - Census Application
Create a web application that will be used in  a census application. A form will ask the user how many people live in their house. They will be asked to choose a number from a drop-down list. When they click submit, they will be given a results page with a form with the appropriate number of text boxes to allow the user to enter the names.

lab05e) - loop to create a checkbox table

Part I)
Write a web application that uses a while loop to output the table of lotto numbers for the national lottery. Use divs to create the boxes and an external stylesheet to style the boxes into a suitable array of numbered boxes.

Part II) 
Amend lab05e to add check boxes to each of the divs shown that allow the user to check multiple numbers. 

Part III) 
Create the results page (lab05e-result.php) that takes the numbers picked from the form and displays them.

lab05f) - while loop to create a multicoloured table
Part I) - uses a while loop with an if inside!
Create a web application that uses a while loop to create an HTML table that displays numbers between 1 and 100, similar to that shown below. (Note: you may need the modulus operator (%) also.)

Part II)
Amend the PHP code in the above to allow the table to show each cell in the different colours of the rainbow as shown here:

Part III)
Amend the code in this lab to have random numbers between 1 and 100 placed in each of the cells of the table (Use the rand function for this).

lab05g)-Chessboard
Create a PHP page that produces an 800x800px chessboard with typical alternate colouring. You can use a table or divs to create this.

lab05h) - coloured divs
Part I)

Consider the following screenshot:



This was done using a loop to create div tags with random absolute positions, background-colours, widths and heights. 

In the above case there were 30 divs created, but you could create as many or as few as you wanted based on the loop count.

Recreate the above idea with your own random div generator.

You will need:
rand and dechex php functions.

You may find the meta tag below of use to periodically refresh the screen of the browser. The content value is the refresh time in seconds:

<meta http-equiv="refresh" content="2">


The resulting view source sample is:

<html>
<head>
<title>Sample10 Different size divs across the browser</title>
<meta http-equiv="refresh" content="1">
</head>
<body>



<div style="position:absolute;top:33%;left:62%;background-color:#aa88c1;width:145px;height:68px;"></div>
<div style="position:absolute;top:41%;left:12%;background-color:#940fd2;width:176px;height:147px;"></div>
<div style="position:absolute;top:59%;left:12%;background-color:#63593f;width:56px;height:78px;"></div>
<div style="position:absolute;top:29%;left:19%;background-color:#5c5034;width:174px;height:6px;"></div>
<div style="position:absolute;top:41%;left:61%;background-color:#6d7520;width:116px;height:95px;"></div>
<div style="position:absolute;top:41%;left:88%;background-color:#abab49;width:1px;height:172px;"></div>
<div style="position:absolute;top:10%;left:33%;background-color:#84840a;width:164px;height:19px;"></div>
<div style="position:absolute;top:80%;left:25%;background-color:#38ef51;width:98px;height:30px;"></div>
<div style="position:absolute;top:88%;left:13%;background-color:#47386c;width:75px;height:86px;"></div>
<div style="position:absolute;top:61%;left:63%;background-color:#9ce4fb;width:11px;height:113px;"></div>
<div style="position:absolute;top:61%;left:47%;background-color:#39c6f5;width:25px;height:19px;"></div>
<div style="position:absolute;top:64%;left:52%;background-color:#fa84c;width:83px;height:118px;"></div>
<div style="position:absolute;top:84%;left:48%;background-color:#ea8c15;width:93px;height:70px;"></div>
<div style="position:absolute;top:5%;left:32%;background-color:#994881;width:58px;height:169px;"></div>
<div style="position:absolute;top:71%;left:23%;background-color:#f2ea90;width:14px;height:127px;"></div>
<div style="position:absolute;top:38%;left:68%;background-color:#510b6b;width:13px;height:163px;"></div>
<div style="position:absolute;top:81%;left:67%;background-color:#507f68;width:26px;height:174px;"></div>
<div style="position:absolute;top:38%;left:76%;background-color:#6cea48;width:98px;height:52px;"></div>
<div style="position:absolute;top:3%;left:37%;background-color:#c1853b;width:199px;height:176px;"></div>
<div style="position:absolute;top:13%;left:4%;background-color:#389cea;width:154px;height:68px;"></div>
<div style="position:absolute;top:6%;left:50%;background-color:#91d42c;width:14px;height:125px;"></div>
<div style="position:absolute;top:21%;left:45%;background-color:#5c7b5c;width:113px;height:113px;"></div>
<div style="position:absolute;top:17%;left:41%;background-color:#4ad697;width:104px;height:119px;"></div>
<div style="position:absolute;top:15%;left:86%;background-color:#6a96c8;width:124px;height:87px;"></div>
<div style="position:absolute;top:63%;left:59%;background-color:#cf67b4;width:98px;height:130px;"></div>
<div style="position:absolute;top:66%;left:57%;background-color:#aa85e7;width:193px;height:80px;"></div>
<div style="position:absolute;top:3%;left:3%;background-color:#e9099a;width:127px;height:21px;"></div>
<div style="position:absolute;top:52%;left:78%;background-color:#938e2c;width:192px;height:86px;"></div>
<div style="position:absolute;top:15%;left:13%;background-color:#d92a30;width:95px;height:134px;"></div>
<div style="position:absolute;top:43%;left:59%;background-color:#9677fd;width:184px;height:54px;"></div>




</body>
</html>


part ii)
Continue to alter this lab: The shapes created above are all rectangles. Change your code so that uniform squares are created of random sizes.

part iii)
Continue to alter this lab: The shapes created above are all rectangles. Change your code so that circles are created of random sizes.

part iv)

At the moment the hues that are chosen at random across the RGB hexdecimal spectrum are very wide ranging. Alter your code so that the colours chosen are all complimentary hues of the same colours. (ie choose varying degrees of red for all you divs backgrounds). 

This lab will result in one file:
lab05b.php

lab05i)
part i)
Study the php function fgets and fopen in the php function reference. These library functions enable programmers to open files and read from them. In the fgets function reference example #1 is as follows:

<?php
$handle = @fopen("inputfile.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
?>

This code opens the file inputfile.txt and reads it line by line and echos each line to the screen. The number of while loop iterations is controlled by the number of lines in the file i.e. once there are no more lines the while loop stops looping.

Create a text file in your htdocs folder. Name this file lyrics.txt. Insert the lyrics of a song or recitation into the text file. Make sure that the lyrics are laid out on different lines.

See can you use the code above along with the code you developed in lab05h. The aim is to have random rectangles again, but also to insert the individual lines held in lyrics.txt as the content of each separate div.




<?php

//try and open the file
$handle = @fopen("lyrics.txt", "r");

//if there is a file to open
if ($handle) {
	//loop through the file line by line until the end
    while (($buffer = fgets($handle, 4096)) !== false) {
   
    //random numbers assigned into top left width and height variables
	$top = rand(0,100);
	$left = rand(0,100);
	$widthHeight = rand(100,250);

	$randForHex = rand(9,13);
	$color = dechex($randForHex);
	$redHue = $color.'00000';

	//echo the div with all random values inserted
	echo  '<div style="position:absolute;top:'.$top.'%;left:'.$left.'%;background-color:#'.$redHue.';width:'.$widthHeight.'px;">'.$buffer.'</div>';

    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    //close the handle so it can be used again.
    fclose($handle);
}
?>

lab06

lab06a) - color table

Create a web application that uses a for loop that loops through 16 different colours of hex decimal reds, shows the hex color code and shows a swatch of the different colours.

e.g.



back to top
lab06b) - euro increments
part i)

Create a web application that outputs values of euro in increments of 10 and their corresponding Sterling value. The table should show values up to €300. 

These values will be placed in a two column table. This table should have a header row.

e.g.




partii)
Add columns on to this table that shows US dollars, Australian dollars and Japanese Yen conversions. 
back to top


lab06c) - Temperature Gauge
Create an application that shows a thermometer scale that runs from -20° to 30° in units of 5. see Example below.  (Note:  $i+=5  is equivalent to $i=$i+5)


lab06d)
Create a web application that fills an array with the 16 different hues of hexdecimal red from lab06a using a for loop and the outputs the results using a for loop.

back to top


lab06e) - car rental
part i)
Consider the following recursive form:



A user inputs their preferred option for rental car. Based on this option choice they have a range of cars listed for that class of car:

for mini:
kia picanto
ford ka
volkswagen lupo

for economy:
ford fiesta
kia rio
volkswagen polo

for mid-sized:
ford focus
kia ceed
volkswagen golf

for executive:
ford mondeo
kia optima
volkswagen passat


part ii)
Add to the result as described above to output a new form with a radio button for each cars in the class selected from the form page.This will result in having three pages in the chain of pages passing information from one to another. 

We’ll name them 
lab06e-form.php, 
lab06e-result.php
This will be the standard we adopt.




part iii)
Expand on the above even further by adding an image to the second page of the chosen car. Download lab04_files.zip from blackboard for all the car images.




back to top
lab06f) use nested for loops - does not use arrays

Similar to lab06a create an application that produces a table that cycles through all the red colours in the hexdecimal color system. This should result in a 16x16 table. You will need to use a ‘nested for loop’ for this effect.

The nested for loop statements will take the form:

lab06g)
Please a write an application that allows the user to randomise different entries. A first form should ask the user how many values/entries they have (note a select box is the best option for this input type). The date from this form is passed to the same php page .

The same php page uses the first entry and gives the user the same number of textboxes to allow the user to enter their data. On submission the application shows the data on separate lines in a random order.

Form code:

<html>
<head>
<title>lab06g</title>

</head>

<form name="form1" method="POST" action="lab06g-form.php">

<select name="dataEntryCount">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select>

<input type="submit" value="submit"/>
</form>

<p>
<form  name="form2" method="POST" action="lab06g-result.php">
Please enter your data in the following fields<br/>
<?php
   $dataEntryCount = $_POST['dataEntryCount'];
   
   for($i=0; $i<$dataEntryCount; $i++){
     echo '<input type="text" name="text'.$i.'"/><br/>';
   }
   

?>
<input type="submit" value="submit"/>

</form>
</body>
</html>


Results Page:


<html>
<head>
<title>lab06g</title>

</head>


<?php

//use the asort function to sort
asort($_POST);

//use foreach loop rather than for loop because of associative array
foreach ($_POST as &$value) {
   echo $value.'<br/>';
}

?>

</body>
</html>

back to top

lab06h) - county league - arrays
part i)
Create an application that stores all the names of the leinster counties in an array. Every time the page is refreshed a random county name is echoed out.

part ii)
Add to the application above an array that stores all the names of the counties in Munster. Have the application output 6 match fixtures between random county teams from opposite provinces.


part iii)
In the above part some of the counties will duplicate and will mean that some counties are slated to play two fixtures. Amend your code that as soon as a county is drawn to play it is omitted from the rest of the fixtures.



back to top

lab08
lab08a)

Create a single php web page that contains the following functions:
part i)
A function called monthsToWeeks that accepts an integer parameter $months and then prints out an estimation of how many weeks are contained in that number of months.
part ii)
A function called tableMaker that accepts two parameters $rows and $columns.  It then echos a table made in the dimensions given.
part iii)
A function called internationalPhoneCode that accepts one parameter $phoneNumber. The function should change the number to include the international dialling code for Ireland (+353) and returns the number as a string. e.g. if the number passed is 087 6789403, then +353 87 6789403 should be returned.
part iv)
A function called extensionIdentifier that accepts a single parameter $filename and parses the file name and checks the file extension against an array of different commonly found file extensions. Once the match is found the type of document is returned. e.g. input: mydoc.docx return: word document

Test each of the functions above by calling them from outside the functions and using return values (if any) appropriately.

lab08b)
Create a single php web page that contains the following functions:

part i)
A function called galleryMaker. This function should take a single array parameter $images. This array holds the filenames of all the images that should be part of the gallery. The function then generates and returns a string that is essentially the html that shows a gallery of all the pictures. None of these images are clickable. Test this function approriately.


