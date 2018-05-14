	<?PHP include('include/header.php');?>

	<table border="0"><tbody>  <tr>
	  <td width="100" class="reg_item">sdfsdf:</td>
      <td class="reg_input"><select name="medication_type" id="medication_type"    onchange="changeOptionsmedication_order_type(this.value)"    ><option value ="" selected="selected">Select From List</Option>
<Option value ="dfsdf"  >option 33</Option>
<Option value ="sdfsdf" selected="selected" >option 22</Option>
</select></td>
  </tr>
  <tr>
    <td class="reg_item">sdfsdf:</td>
    <td class="reg_input" colspan="3"><input type="text" name="medication" id="medication" onClick="this.value='';" title="" value="" size="53" autocomplete="off" class="ac_input" />    </td>
  </tr>
  <tr>
    <td class="reg_item">sdfsdf:</td>
    <td class="reg_input" colspan="3"><input type="text" id="sig_find" name="sig_find" size="53" class="ac_input" />	</td>
  </tr>
    <tr>
    <td class="reg_item">sdfsdfsdf:</td>
    <td colspan="3" class="reg_input"><textarea name="notes" id="notes" cols="43" rows="1"></textarea>
      <input type="hidden" name="med_action" id="med_action" value="" >
      <input type="hidden" name="dose" id="dose" value="" >
      <input type="hidden" name="unit" id="unit" value="" >
            <input type="hidden" name="dose_others" id="dose_others" value="" >
            <input type="hidden" name="duration" id="duration" value="" >
      <input type="hidden" name="quantity" id="quantity" value="" >
      <input type="hidden" name="quantity_unit" id="quantity_unit" value="" >    </td>
    </tr>
</tbody></table>  
<table>
<tr><td colspan="4">
    <input type="submit" id="sav_medication" name="sav_medication" value=" Save " class="gbutton">
    <input id="fnMode" name="fnMode" value="search" type="hidden">
    <input id="nr" name="nr" value="" type="hidden">
    <input id="load_patient_med" name="load_patient_med" value="" type="hidden">
    </td>   </tr>
</table>

<table width="100%"><tbody><tr>
<td align="left">
  <span>Status:</span>
  <select name="status_filter" id="status_filter"      ><option value ="" selected="selected">Select option</Option>
<Option value ="n" selected="selected" >Active</Option>
<Option value ="y"  >Inactive</Option>
</select>
  <span class="reg_input">
  <input type="text" id="sig_find2" name="sig_find2" size="53" class="ac_input" />
  </span>&nbsp;
  <input class="gbutton" name="xyz" value="Search" type="submit">
</td>

<td> &nbsp;
  <input class="gbutton" name="delete" value="  Add Stock  " onClick="del_form();" type="button">
&nbsp;
<input class="gbutton" name="Input" value="Delete"  type="button" onClick="delete()"></td>
</tr>
</tbody></table>


<table width="100%" border="0" class="bdrtable">
<tbody>

<tr>
     <th class="checkall">
  <input type="checkbox" value="" name="check_all" id="check_all">&nbsp;</th>
    <th>sss</th>
    <th>ss </th>
    <th>ss</th>
    <th>sdf</th>
    <th>sdf</th>
    <th>sdfsdf</th>
    <th>sdf</th>
    <th>sdfsdf</th>
    <th>sdf sdf </th>
    <th><p>status</p>
      </th>
    <th>Action</th>
  </tr>
  <tbody>
     <tr class="odd">
	 <td>  <input type="checkbox" value="1107" name="medication_nr[]" id="medication_nr" class="medication_ids"> </td>
  <td>sdfsdfNULL (0) </td>
  <td>Asdfsdf</td>
   <td> 03/30/2018 </td>
   <td>03/14/2018</td>
   <td>03/14/2018</td>
   <td>03/13/s</td>
   <td>sdf</td>
   <td>hbhhhh</td>
  <td>03/13/2018</td>
  <td> active   </td>
    <td>
   <a href="javascript:void(0);" onClick="editmedication('0')" >
   <img src="../../gui/img/common/default/edit.png" title="Messages" width="16" border="0"> </a>
   <a href="#" onClick="delete_medication('1107')">
      <img src="../../gui/img/common/default/delete.png" title="Care Plan" width="16" border="0"> </a>
      </td>
    </tr>
     <tr class="even">
  <td>   <input type="checkbox" value="1108" name="medication_nr[]" id="medication_nr" class="medication_ids"> </td>
  <td>24sdfsdf </td>
  <td>   Inhaler Twice daily </td>
   <td> 04/02/2018 </td>
   <td>04/11/2018</td>
   <td>04/10/2018</td>
   <td>04/11/2018</td>
   <td>sdfsdf</td>
   <td>hbhhhh</td>
  <td>04/18/2018</td>
  <td> active   </td>
    <td>
   <a href="javascript:void(0);" onClick="editmedication('1')" >
   <img src="../../gui/img/common/default/edit.png" title="Messages" width="16" border="0"> </a>
   <a href="#" onClick="delete_medication('1108')">
      <img src="../../gui/img/common/default/delete.png" title="Care Plan" width="16" border="0"> </a>
      </td>
    </tr>
  </tbody>
</tbody>
</table>

	<?PHP include('include/footer.php');?>