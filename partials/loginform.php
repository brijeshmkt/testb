		<form class="form-horizontal" method="post" action="">

        <div class="form-group required">
            <label for="inputUsername" class="control-label col-xs-3">User name</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
        </div>

        

        <div class="form-group required">
            <label for="inputPassword" class="control-label col-xs-3">Password</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
        </div>

        <input type="hidden" id="submit" name="submit" value="submit">

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-8">
                <button type="submit" value="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

    	</form>