<!-- file path app/View/Subcategories/get_by_category.ctp -->
<?php 
    if(!empty($subcategories)){
        foreach ($subcategories as $key => $value): 
?>
        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php 
        endforeach; 
    } else { 
?>
    <option value="">No Data</option>
<?php 
    } 
?>