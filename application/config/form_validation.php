<?php
$config =array(
    'login'=>array(
                        array(
                            'field' => 'uname',
                            'label' => 'Username',
                            'rules' => 'required'

                        ),
                        array(
                            'field' => 'psw',
                            'label' => 'Password',
                            'rules' => 'required',
                            'errors' => array(
                            'required' => 'You must provide a %s.'

                                                )

                            )
                            ),
    'record'=>array(
                        array(
                            'field' => 'tno',
                            'label' => 'Train No',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'date',
                            'label' => 'Date',
                            'rules' => 'required',
                            'errors' => array(
                            'required' => 'You must provide a %s.'
                            )
                        ),
                        array(
                            'field' => 'from',
                            'label' => 'From',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'to',
                            'label' => 'To',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'dept',
                            'label' => 'Departure',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'arrt',
                            'label' => 'Arrival',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'ojj',
                            'label' => 'Object',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'kms',
                            'label' => 'Kilometer',
                            'rules' => 'required'
                        ),
                        array(
                            'field' => 'remark',
                            'label' => 'Remark',
                            'rules' => 'required'
                        )
                        ),
        'signup'=>array(
                        array(
                            'field' => 'user_id',
                            'label' => 'Username',
                            'rules' => 'trim|required|is_unique[login_data.user_id]',
                            'errors'=>array('is_unique'=>'User Name already taken')
                        ),
                        array(
                            'field' => 'psw',
                            'label' => 'Password',
                            'rules' => 'trim|required',
                            'errors' => array(
                                'required' => 'You must provide a %s.'
                        )

                        ),
                        array(
                            'field' => 'cpsw',
                            'label' => 'Confirm Password',
                            'rules' => 'trim|required|matches[psw]',
                            'errors' => array(
                                'required' => 'You must provide a %s.'
                        )


                        )
    )
);
