package br.com.etecia.myapp;

public class Pecas {
    private double diametro;

    private double potencia;

    private double corrente;

    private double vibracao;

    public Pecas() {
    }

    public Pecas(double diametro, double potencia, double corrente, double vibracao) {
        this.diametro = diametro;
        this.potencia = potencia;
        this.corrente = corrente;
        this.vibracao = vibracao;
    }

    public double getDiametro() {
        return diametro;
    }

    public void setDiametro(double diametro) {
        this.diametro = diametro;
    }

    public double getPotencia() {
        return potencia;
    }

    public void setPotencia(double potencia) {
        this.potencia = potencia;
    }

    public double getCorrente() {
        return corrente;
    }

    public void setCorrente(double corrente) {
        this.corrente = corrente;
    }

    public double getVibracao() {
        return vibracao;
    }

    public void setVibracao(double vibracao) {
        this.vibracao = vibracao;
    }
}
