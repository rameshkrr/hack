<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
      
        <input type="search" class="search-field" autocomplete="off" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
      <button type="submit" id="searchsubmit" />
           <span class="icon"><i class="fa fa-search"></i></span>   
      </button>

    </input>
</form>