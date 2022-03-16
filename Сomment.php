<?php
Class Comment{
    public $result;
	public  function render()
		{
		
            
            {
                foreach ($this->result as $elem) {
                    $image = '<img class="card-img-top" src="./files/' . $elem['image'] . '">';
                    $date = '<h5 class="date">' . $elem['date'] . '</h5>';
                    $name = '<h5 class="name">' . $elem['name'] . '</h5>';
                    $comment = '<p class="card-text">' . $elem['comment'] . '</p>';
                    echo '<div class="card" style="width: 30rem;">
               ' . $image . '<div class="card-body">' . $date . $name . $comment . '
               <a href="#" class="btn btn-primary">Добавить комен</a>
               </div></div>';
                }
            }

		}

}