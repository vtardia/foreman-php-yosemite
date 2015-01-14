<?php
/**
 * Sample dummy PHP Worker
 *
 * Use Process control extension if available
 */

// Infinite loop
for (;;) {
    
    // Do something
    echo "Dummy task: ", date('d/m/Y H:i:s'), "\n";
    
    // Wait net cycle
    sleep(10);
}