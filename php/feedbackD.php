<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Bootstrap Case</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
              integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
  </head>
  <body>  
    
    <div class="container">
      <h1>FeedBack Display</h1>
      
      <div class="container">
        <form class="form-group">
				<div class="form-group">
				  <select	class="custom-select"	id="module"	name="module">
								<option	value="WAD">Web	Application	Development</option>
								<option	value="AI">Introduction	to	Artificial	Intelligence</option>
								<option	value="BDA">Business	Data	Analytics</option>
					</select>
				</div>
				<div	class="form-group">
						<label	for="semester">Semester:	</label>
						<select	class="custom-select"	id="semester"	name="semester">
								<option	value="Sem1_2016-17">Sem	1,	2016/17</option>
								<option	value="Sem2_2017">Sem	2,	2017</option>
								<option	value="Sem1_2017-18">Sem	1,	2017/18</option>
					</select>
				</div>
				
				<div	class="form-group">
						<label	for="feedback-ta-label">Feedback:	</label>
						<textarea	class="form-control"	id="feedback-textarea"	rows="3"	style="min-width:	100%"></textarea>
				</div>
				
				<div	class="form-group">
						<label	class="radio-inline"><input	type="radio"	name="rating"	value="1">:((</label>
						<label	class="radio-inline"><input	type="radio"	name="rating"	value="2">:(</label>
						<label	class="radio-inline"><input	type="radio"	name="rating"	value="3">:|</label>	
						<label	class="radio-inline"><input	type="radio"	name="rating"	value="4">:)</label>
						<label	class="radio-inline"><input	type="radio"	name="rating"	value="5">:))</label>	
				</div>
				
				<button	id="submit" name="submit" type="submit"	class="btn	btn-default">Drop	into	Box</button>	
      </form>		
    </div>
      
      <div class="panel panel-Default">
         <table class="table">
           <thead>
             <tr>
             <th>#</th>
             <th>Module</th>
             <th>Semester</th>
             <th>Text</th>
             <th>Rating</th>
             </tr>
           </thead>
           <tbody>
             <?php
    
                  $xml = simplexml_load_file("../data/feedback.xml") or die("erro opning xml");
                  $n = 1;
                  foreach($xml ->children() as $feedback){
                    echo"<tr>";
                    echo"<th scope=\"row\">".$n."</th>";
                   foreach($feedback ->children() as $child){
                     echo "<td>". $child ."</td>";
                      }
                     echo "</tr>";
                   $n++;                   
                  }
                ?>
           </tbody>
        </table>
       </div>      
    </div> 
  </body>
</html>