#!/bin/bash
echo "Running SAST..."

# Buscar malas prácticas básicas, excluyendo este script
grep -R --exclude=security/sast.sh "eval(" . && exit 1 || true
grep -R --exclude=security/sast.sh "exec(" . && exit 1 || true

echo "SAST checks passed"
