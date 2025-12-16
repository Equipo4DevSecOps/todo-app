#!/bin/bash
echo "Running SAST..."

# Buscar malas prácticas básicas, excluyendo este script y .git
grep -R --exclude=security/sast.sh --exclude-dir=.git "eval(" . && exit 1 || true
grep -R --exclude=security/sast.sh --exclude-dir=.git "exec(" . && exit 1 || true

echo "SAST checks passed"
