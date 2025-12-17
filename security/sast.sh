#!/bin/bash
echo "Running SAST..."

APP_DIR="./todo-app"

# Buscar eval( y exec( solo dentro de la app, mostrar advertencia sin fallar
if grep -R --exclude=security/sast.sh --exclude-dir=.git "eval(" "$APP_DIR"; then
    echo "⚠ Warning: 'eval(' detected in code"
fi

if grep -R --exclude=security/sast.sh --exclude-dir=.git "exec(" "$APP_DIR"; then
    echo "⚠ Warning: 'exec(' detected in code"
fi

echo "SAST checks finished"
exit 0
