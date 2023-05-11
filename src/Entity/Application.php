<?php

namespace App\Entity;

use App\Repository\ApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApplicationRepository::class)]
class Application
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'applications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate_id = null;

    #[ORM\ManyToOne(inversedBy: 'applications')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobOffer $job_offer = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\PrePersist]
    public function __construct(JobOffer $jobOffer, Candidate $candidate)
    {
        $this->job_offer = $jobOffer;
        $this->candidate_id = $candidate;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidateId(): ?Candidate
    {
        return $this->candidate_id;
    }

    public function setCandidateId(?Candidate $candidate_id): self
    {
        $this->candidate_id = $candidate_id;

        return $this;
    }

    public function getJobOffer(): ?JobOffer
    {
        return $this->job_offer;
    }

    public function setJobOffer(?JobOffer $job_offer): self
    {
        $this->job_offer = $job_offer;

        return $this;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        if (!$this->created_at) {
            $this->setCreatedAt(new \DateTimeImmutable(date('Y-m-d H:i:s')));
        }

        return $this->created_at;
    }
}
