<?php
namespace Album\Form;

use Zend\Form\Form;
use \Zend\Form\Element;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('album');
        $this->setAttribute('class', 'form-horizontal');
        $this->setAttribute('method', 'post');

        $id = new Element\Hidden('id');

        $artist = new Element\Text('artist');
        $artist->setLabel('Artist')
                ->setAttribute('class', 'required span4')
                ->setAttribute('placeholder', 'Artist')
                ->setAttribute('maxlength', '100');

        $title = new Element\Text('title');
        $title->setLabel('Title')
                ->setAttribute('class', 'required span4')
                ->setAttribute('placeholder', 'Title')
                ->setAttribute('maxlength', '100');

        $submit = new Element\Submit('submit');
        $submit->setValue('Submit')
                ->setAttribute('class', 'btn btn-primary');

        $this->add($id);
        $this->add($artist);
        $this->add($title);
        $this->add($submit);

//        $this->add(array(
//            'name' => 'id',
//            'attributes' => array(
//                'type'  => 'hidden',
//            ),
//        ));
//        $this->add(array(
//            'name' => 'artist',
//            'attributes' => array(
//                'type'  => 'text',
//            ),
//            'options' => array(
//                'label' => 'Artist',
//            ),
//        ));
//        $this->add(array(
//            'name' => 'title',
//            'attributes' => array(
//                'type'  => 'text',
//            ),
//            'options' => array(
//                'label' => 'Title',
//            ),
//        ));
//        $this->add(array(
//            'name' => 'submit',
//            'attributes' => array(
//                'type'  => 'submit',
//                'value' => 'Go',
//                'id' => 'submitbutton',
//            ),
//        ));
    }
}