#!/bin/bash
echo "Running SAST..."

# Buscar malas prácticas básicas
grep -R "eval(" . && exit 1 || true
grep -R "exec(" . && exit 1 || true

echo "SAST checks passed"
