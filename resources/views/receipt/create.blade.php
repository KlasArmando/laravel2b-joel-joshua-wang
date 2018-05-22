<?php
echo Form::open(array('url' => 'receipt'));
echo '<br/>';

echo "Enter Receipt";
echo "<br/>";
echo Form::text('receipt');
echo '<br/>';

echo "Ingredients for the receipt ";
echo "<br/>";
echo Form::textarea('ingredients');
echo '<br/>';



echo Form::submit('Enter');
echo Form::close();
?>