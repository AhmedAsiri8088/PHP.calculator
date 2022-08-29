<html>
    <head>
          <title> Calculator using PHP </title>
    </head>
        
    <body>
          <h2> Calculator </h2>
              <form method= "post" action= "calculate.php" name="calform" id="calform">
              <div>
                       <lable for="no1"> Number 1 : </lable>
                       <input type="number" id="no1" name="no1">
              </div>             
                 <br> 
               <div>
              <lable for="no2"> Number 2 : </lable>
                       <input type="number" id="mo2" name="no2">
              </div>
            
              <br>
              <div>
                  <label for='arth_oper'> Select Operation : </label>
                      
                  <Select id= 'arth_oper' name= 'arth_oper'>
                      <option value='sum_oper'> Sum + </opton>
                      <option value='sub_oper'> Sub - </opton>
                      <option value='multip_oper'> Multiple *</opton>
                      <option value='divoper'> Div / </opton>
                </Select>
             </div>
                 <br>
              <button id="submit" name="submit" value="Submit"> Calculate </button>
              </form>

    </body>


</html>