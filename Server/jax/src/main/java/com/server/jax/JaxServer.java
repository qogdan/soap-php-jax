package com.server.jax;

import com.server.jax.implementations.CalculatorImpl;
import com.server.jax.services.CalculatorService;

import jakarta.xml.ws.Endpoint;

public class JaxServer {
	public static void main(String[] args) {
		String url = "http://localhost:8080/calculator";
		Endpoint.publish(url, new CalculatorImpl());
	}

}
