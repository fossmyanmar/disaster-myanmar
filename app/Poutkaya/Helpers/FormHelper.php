<?php
//Form Helper for simple form
Form::macro('txt', function($name, $label, $value=null)
{
	return "
		<div class='form-group'>
			<label class='control-label sr-only' for='{$name}'>{$label}</label>
			<input type='text' class='form-control' name='{$name}' id='{$name}' placeholder='{$label}' value='{$value}'>
		</div>
	";
});

Form::macro('txtarea', function($name, $label, $value=null)
{
	return "
		<div class='form-group'>
			<label class='control-label sr-only' for='{$name}'> {$label} </label>
			<textarea class='form-control' name='{$name}' id='{$name}' placeholder='{$label}' rows='3'>{$value}</textarea>
		</div>
	";
});

Form::macro('mail', function($name, $label, $value = null)
{
	return "
		<div class='form-group'>
			<label class='control-label sr-only'> {$label} </label>
			<input type='email' class='form-control' name='{$name}' id='{$name}' placeholder= '{$label }' value='{$value}'>
		</div>
	";
});

Form::macro('pwd', function($name, $label)
{
	return "
		<div class='form-group'>
			<label class='control-label sr-only'> {$label} </label>
			<input type='password' class='form-control' name= '{$name}'  id='{$name}' placeholder= '{$label}' >
		</div>
	";
});

Form::macro('chkbox', function($name, $label, $value = null)
{
	return "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='{$name}' {$value}>  {$label} 
			</label>
		</div>
	";
});

Form::macro('date', function($name, $label, $value = null)
{
	return  "
		<div class='form-group'>
	            <div class='input-group date' id={$name}>
	                <input type='text' class='form-control' name={$name}/>
	                <span class='input-group-addon'>
	                    <span class='fa fa-calendar'>
	                    </span>
	                </span>
	            </div>
	        </div>	
	";
});