<?php ?>


<p>So in the day job ther is a form for credit cards and in that form is a <code>select</code> tag for the year.  Problem is every year I have to remove the previous year and add a new one at the bottom.  Here is a page to test the options of <code>php</code> in creating a more dynamic approch.</p>

<h3>Standard <code>html</code> way</h3>

<select name="first">
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select>

<h3><code>php for</code> way</h3>

<?php 

$currentYear = date(Y);
echo "<select name='second'>";
for($i=0; $i<=7; $i++){ 
    $year = $currentYear + $i;
echo "<option value='".$year."'>".$year."</option>/n";
}
echo "</select>";
?>

<h3><code>php foreach(range())</code> way</h3>

<?php
$startYear = date(Y);
echo "<select name='second'>";
foreach(range($startYear, $startYear + 7) as $number){
    echo "<option value='".$number."'>".$number."</option>/n";
}
echo "</select>";

?>

<h3>conclusion</h3>
 	     <ol>
 	     	<li><code>date()</code> creates an integer not a string</li>
            <li>can use for statment with year as variable</li>
            <li>also can use <code>range()</code> function to solve problem</li>
 	     </ol>

 