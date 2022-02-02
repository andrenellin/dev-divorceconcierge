<!-- php start -->
<?php
if ($children_number == 3 && $children_expecting == "No") { ?>
<!-- php pause -->
<table>
    <tr>
        <td class="paragraph table_children_col_2">&nbsp;</td>
        <td class="paragraph table_children_col_2">Name:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_fullname ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_2">&nbsp;</td>
        <td class="paragraph table_children_col_2">Sex:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_gender ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_2">&nbsp;</td>
        <td class="paragraph table_children_col_2">Birthdate:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_dob ?></td>
    </tr>
    <tr>
        <td class="paragraph table_children_col_2">&nbsp;</td>
        <td class="paragraph table_children_col_2">Social Security Number:</td>
        <td class="paragraph table_children_col_3"><?php echo $child_2_ssn ?></td>
    </tr>
    <?php if ($child_2_drivers_license == 'Yes') { ?>
    <tr>
        <td class="paragraph table_children_col_2">&nbsp;</td>
        <td class="paragraph table_children_col_2">Drivers License Number and issuing state:</td>
        <td class="paragraph table_children_col_3">
            <?php echo $child_2_drivers_license_number . ', ' . $child_2_drivers_license_state?></td>
    </tr>
    <?php } ?>
</table>
<br><br>
<!-- php resume -->
<?php } ?>
<!-- php end -->