<?php
    
    namespace app;
    
    class Hello
    {
        private string $message = 'Hello World!';
        public function __construct(string $message)
        {
            $this->message = $message;
        }
        
        public function talk(): string
        {
            return $this->message;
        }
    }