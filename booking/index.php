<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/logo1.png" sizes="50x50" />
        <title>Feel the Space | Book travel in SPACE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="./css/style.css"> -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="booking-form-box">
            <div class="radio-btn">


            </div>
            <div class="booking-form">
                <label>Flying from:</label>
                <input type="text" name="flyingFrom" class="form-control" placeholder="Space Station...">

                <div class="input-grp">
                    <label>Departing</label>
                    <input type="date" name="departing" class="form-control select-date">
                </div>

                <div class="input-grp">
                    <label>Returning</label>
                    <input type="date" name="departing" class="form-control select-date">
                </div>
                <div class="input-grp">
                    <label>Adults</label>
                    <input type="number" class="form-control" vlaue="1">
                </div>

                <div class="input-grp">
                    <label>Children</label>
                    <input type="number"  class="form-control" value="0">
                </div>

                
                <div class="input-grp">
                    <label>Children</label>
                    <select class="custom-select"></select>
                    <option value="1">Economy Class</option>
                    <option value="2">Business Class</option>
                    
                </div>

                <div class="input-grp">
                    <button type="button" class="btn btn-primary flight">
                        Show Flights
                    </button>
                </div>

                <div class="input-grp">
                    <label>Travel Class</label>
                    <select name="trvclass" class="custom-select">
                        <option value="3 Days Traveling">3 Days Traveling</option>
                        <option value="7 Days Traveling">7 Days Traveling</option>
                        <option value="30 Days Traveling">30 Days Traveling</option>
                    </select>
                </div>
            </div>
        </div>
    </body>
</html>




