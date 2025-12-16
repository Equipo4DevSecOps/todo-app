#!/bin/bash
echo "Running SAST..."

# Buscar eval( y exec(, pero sin salir con error automáticamente
if grep -R --exclude=security/sast.sh --exclude-dir=.git "eval(" .; then
    echo "⚠ Warning: 'eval(' detected in code"
fi

if grep -R --exclude=security/sast.sh --exclude-dir=.git "exec(" .; then
    echo "⚠ Warning: 'exec(' detected in code"
fi

echo "SAST checks finished"
exit 0
