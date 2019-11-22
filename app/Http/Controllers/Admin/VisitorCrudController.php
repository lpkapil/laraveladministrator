<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VisitorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VisitorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class VisitorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Visitor');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/visitor');
        $this->crud->setEntityNameStrings('visitor', 'visitors');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn(['name' => 'id', 'type' => 'text', 'label' => 'ID']);
        $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addColumn(['name' => 'email', 'type' => 'email', 'label' => 'Email']);
        $this->crud->addColumn(['name' => 'mobile', 'type' => 'number', 'label' => 'Mobile No']);
        $this->crud->addColumn(['name' => 'whom_to_meet', 'type' => 'text', 'label' => 'Whom to meet']);
        $this->crud->addColumn(['name' => 'reason_to_meet', 'type' => 'text', 'label' => 'Reason to meet']);
        $this->crud->addColumn(['name' => 'in_time', 'type' => 'datetime', 'label' => 'In Time']);
        $this->crud->addColumn(['name' => 'out_time', 'type' => 'datetime', 'label' => 'Out Time']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(VisitorRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addField(['name' => 'email', 'type' => 'email', 'label' => 'Email']);
        $this->crud->addField(['name' => 'mobile', 'type' => 'number', 'label' => 'Mobile No']);
        $this->crud->addField(['name' => 'photo', 'type' => 'image', 'label' => 'Photo']);
        $this->crud->addField(['name' => 'address', 'type' => 'textarea', 'label' => 'Address']);
        $this->crud->addField(['name' => 'whom_to_meet', 'type' => 'text', 'label' => 'Whom to meet']);
        $this->crud->addField(['name' => 'reason_to_meet', 'type' => 'textarea', 'label' => 'Reason to meet']);
        $this->crud->addField(['name' => 'in_time', 'type' => 'datetime_picker', 'label' => 'In Time']);
        $this->crud->addField(['name' => 'out_time', 'type' => 'datetime_picker', 'label' => 'Out Time']);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
