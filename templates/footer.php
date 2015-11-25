  <footer class="footer">
    <p>&copy; <?php 
    	if (date('Y') != $this->_['startYear']){
    		echo $this->_['startYear'] . '-';
    	}
		echo date('Y') . ' ' . $this->_['company'];
     ?></p>
  </footer>