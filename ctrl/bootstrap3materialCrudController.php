<?php
class bootstrap3materialCrudController extends bootstrap3materialCrudController_Parent
{

    public function alter_values_index($request, $params = null)
    {
        $ret = parent::alter_values_index($request, $params);
        $this->addClass('more_classes_wrap', 'material_well');
        $this->addClasses('more_classes_createbutton', array(
            'btn-fab',
            'btn-material-red',
        ));
        return $ret;
    }

    public function alter_values_create_or_update($request, $params = null)
    {
        $ret = parent::alter_values_create_or_update($request, $params);
        $this->addClass('more_classes_wrap', 'material_well');
        $this->addClass('more_classes_backbutton', 'btn-fab');
        $this->addClass('more_classes_savebutton', 'btn-fab');
        $this->addClass('more_classes_delbutton', 'btn-fab');
        return $ret;
    }

}
