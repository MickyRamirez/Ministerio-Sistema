<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
    public $name ='User';
    public $belongsTo = 'Grupo';
    public $hasOne = 'Perfil';
    public $hasMany = array(
        'Deposito');
    
    public $validate = array(
        'username' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un nombre de usuario es requerido',
                'allowEmpty' => false
            ),
            'between' => array( 
                'rule' => array('between', 3, 15), 
                'required' => true, 
                'message' => 'Los nombre de usuario deben contener entre 5 y 15 caracteres'
            ),
             'unique' => array(
                'rule'    => array('isUniqueUsername'),
                'message' => 'Este nombre de usuario esta en uso.'
            ),
            'alphaNumericDashUnderscore' => array(
                'rule'    => array('alphaNumericDashUnderscore'),
                'message' => 'Nombre de usuario solo puede contener letras numeros y barra baja'
            ),
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Una contraseña es requerida'
            ),
            'min_length' => array(
                'rule' => array('minLength', '6'),  
                'message' => 'Contraseña debe contener 6 caracteres'
            )
        ),
          
        'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Por favor confirme su contraseña'
            ),
             'equaltofield' => array(
                'rule' => array('equaltofield','password'),
                'message' => 'Ambas contraseñas deben ser iguales.'
            )
        ),

         'nombre' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingresar un nombre es requerido',
                'allowEmpty' => false
            ),
        ),
        'apellido' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingresar un apellido es requerido',
                'allowEmpty' => false
            ),
        ),
        'email' => array(
            
             'unique' => array(
                'rule'    => array('isUniqueEmail'),
                'message' => 'Este correo esta en uso',
            ),
            'between' => array( 
                'rule' => array('between', 3, 60), 
                'message' => 'Nombres usuario debe contener de 4 a 60 caracteres'
            )
        ),
        'id_grupo' => array(
            'valid' => array(
                'rule' => array('inList', array('1', '2', '3', '4', '5', '6', '7','8','9','10','11','12','13','14','15')),
                'message' => 'Por favor ingrese un tipo de usuario valido',
                'allowEmpty' => false
            )
        ),
         
         
        'password_update' => array(
            'min_length' => array(
                'rule' => array('minLength', '6'),   
                'message' => 'Contraseña debe tener 6 caracteres',
                'allowEmpty' => true,
                'required' => false
            )
        ),
        'password_confirm_update' => array(
             'equaltofield' => array(
                'rule' => array('equaltofield','password_update'),
                'message' => 'Ambos deberian ser iguales.',
                'required' => false,
            )
        ),

 
         
    );
     
        /**
     * Before isUniqueUsername
     * @param array $options
     * @return boolean
     * 'required' => array(
     *           'rule' => array('email', true),    
     *           'message' => 'Por favor ingrese un correo electronico'   
     *       ),
     */
    function isUniqueUsername($check) {
 
        $username = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.id',
                    'User.username'
                ),
                'conditions' => array(
                    'User.username' => $check['username']
                )
            )
        );
 
        if(!empty($username)){
            if($this->data[$this->alias]['id'] == $username['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
 
    /**
     * Before isUniqueEmail
     * @param array $options
     * @return boolean
     */
    function isUniqueEmail($check) {
 
        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.id'
                ),
                'conditions' => array(
                    'User.email' => $check['email']
                )
            )
        );
 
        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
     
    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
     
    public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 
 
    /**
     * Before Save
     * @param array $options
     * @return boolean
     */
     public function beforeSave($options = array()) {
        // hash our password
        
        if (!$this->id) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
        }

        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['password'] =  $passwordHasher->hash($this->data[$this->alias]['password_update']);
        }
     
        // fallback to our parent
        //return parent::beforeSave($options);
        return true;
    }
 
}
?>
