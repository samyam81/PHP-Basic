<?php
    session_start();
    # Remove all Session Variable
    session_unset();
    # Destroy the Session
    session_destroy();
?>