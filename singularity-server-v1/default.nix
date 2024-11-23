{ pkgs ? import <nixpkgs> {} }:
pkgs.mkShell {
  buildInputs = [
    pkgs.php82
    pkgs.nodejs-18_x  # Explicit Node.js version
    pkgs.composer
  ];
}
